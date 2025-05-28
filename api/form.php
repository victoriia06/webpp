<?php
function form_get($request) {
  return array(
    'headers' => array('Content-Type' => 'text/html'),
    'entity' => file_get_contents('../index.html')
  );
}

function form_post($request) {
  $data = $request['post'];
  $errors = [];
  
  if (empty($data['ФИО'])) $errors[] = 'Не указано имя';
  if (empty($data['phone'])) $errors[] = 'Не указан телефон';
  if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Некорректный email';
  }

  if (!empty($errors)) {
    return json_response(['errors' => $errors], 400);
  }

  try {
    db_command(
      "INSERT INTO feedback (name, email, phone, message) VALUES (?, ?, ?, ?)",
      $data['ФИО'], $data['email'], $data['phone'], $data['comment'] ?? ''
    );
    
    $login = 'user_' . substr(md5($data['email']), 0, 8);
    $password = substr(md5(uniqid()), 0, 8);
    
    return json_response([
      'success' => true,
      'message' => 'Форма успешно отправлена',
      'credentials' => [
        'login' => $login,
        'password' => $password,
        'profile_url' => '/profile/' . urlencode($login)
      ]
    ]);
  } catch (Exception $e) {
    return json_response(['errors' => ['Ошибка базы данных']], 500);
  }
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
