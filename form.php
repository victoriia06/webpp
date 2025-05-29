<?php
require_once '../db.php';
require_once '../init.php';

function verify_recaptcha($response) {
    $secret = conf('6Ld_LE4rAAAAAA6_GXJA3oKzLZ4sF5S28mPEpwuD');
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    
    $data = [
        'secret' => $secret,
        'response' => $response,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return json_decode($result)->success;
}

function json_response($data, $status = 200) {
    return [
        'headers' => [
            'Content-Type' => 'application/json',
            'HTTP/1.1 ' . $status
        ],
        'entity' => json_encode($data)
    ];
}

function form_get($request) {
    return [
        'headers' => ['Content-Type' => 'text/html'],
        'entity' => file_get_contents('../index.html')
    ];
}

function form_post($request) {
    $data = $request['post'];
    $errors = [];
    
    // Проверка reCAPTCHA только если не отключен JS
    if (!isset($data['nojs']) && !verify_recaptcha($data['g-recaptcha-response'])) {
        $errors[] = 'Пройдите проверку reCAPTCHA';
    }
    
    // Валидация полей
    if (empty($data['ФИО'])) $errors[] = 'Укажите имя';
    if (empty($data['phone'])) $errors[] = 'Укажите телефон';
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Некорректный email';
    }
    
    if ($errors) {
        return json_response(['errors' => $errors], 400);
    }
    
    try {
        // Сохранение в БД
        db_command(
            "INSERT INTO feedback (name, email, phone, message) VALUES (?, ?, ?, ?)",
            $data['ФИО'], $data['email'], $data['phone'], $data['comment'] ?? ''
        );
        
        return json_response([
            'success' => true,
            'message' => 'Форма отправлена успешно!'
        ]);
        
    } catch (PDOException $e) {
        error_log("DB Error: " . $e->getMessage());
        return json_response([
            'errors' => ['Ошибка сохранения данных']
        ], 500);
    }
}
