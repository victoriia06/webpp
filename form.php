<?php

function form_get($request) {
  // Возвращаем HTML для GET-запросов
  return array(
    'headers' => array('Content-Type' => 'text/html'),
    'entity' => file_get_contents('./index.html')
  );
}

function form_post($request) {
  // Обработка данных формы
  $data = $request['post'];
  
  // Валидация данных
  $errors = array();
  if (empty($data['ФИО'])) $errors[] = 'Не указано имя';
  if (empty($data['phone'])) $errors[] = 'Не указан телефон';
  if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Некорректный email';
  }
  
  if (!empty($errors)) {
    return array(
      'headers' => array('Content-Type' => 'application/json'),
      'entity' => json_encode(array('errors' => $errors))
    );
  }
  
  // Генерация учетных данных для нового пользователя
  $login = 'user_' . substr(md5($data['email']), 0, 8);
  $password = substr(md5(uniqid()), 0, 8);
  
  // Здесь должна быть логика сохранения в БД
  // save_to_database($data, $login, $password);
  
  // Возвращаем ответ
  return array(
    'headers' => array('Content-Type' => 'application/json'),
    'entity' => json_encode(array(
      'success' => true,
      'message' => 'Форма успешно отправлена',
      'credentials' => array(
        'login' => $login,
        'password' => $password,
        'profile_url' => '/profile/' . urlencode($login)
      )
    ))
  );
}
