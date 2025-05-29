<?php
function form_post($request) {
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Валидация
    $errors = [];
    if (empty($data['name'])) $errors[] = 'Name is required';
    if (empty($data['email'])) $errors[] = 'Email is required';
    if (empty($data['phone'])) $errors[] = 'Phone is required';
    
    if (!empty($errors)) {
        return ['errors' => $errors, 'status' => 400];
    }
    
    try {
        $pdo = DB::getConnection();
        
        // Если пользователь авторизован
        if (!empty($request['user'])) {
            $stmt = $pdo->prepare("INSERT INTO p_feedback (user_id, name, email, phone, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([
                $request['user']['id'],
                $data['name'],
                $data['email'],
                $data['phone'],
                $data['message'] ?? null
            ]);
        } else {
            // Анонимная отправка
            $stmt = $pdo->prepare("INSERT INTO p_feedback (name, email, phone, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([
                $data['name'],
                $data['email'],
                $data['phone'],
                $data['message'] ?? null
            ]);
            
            // Создаем временного пользователя
            $login = 'user_' . bin2hex(random_bytes(4));
            $password = bin2hex(random_bytes(4));
            
            return auth_register([
                'login' => $login,
                'password' => $password,
                'email' => $data['email']
            ]);
        }
        
        return ['success' => true, 'status' => 200];
        
    } catch (PDOException $e) {
        return ['error' => 'Database error', 'status' => 500];
    }
}
