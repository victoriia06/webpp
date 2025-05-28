<?php
function profile_get($request, $username) {
  if (empty($request['user'])) {
    return access_denied();
  }
  
  $user = db_row(db_query("SELECT * FROM users WHERE login = ?", $username));
  if (!$user) {
    return not_found();
  }
  
  return json_response($user);
}

function profile_put($request, $username) {
  if (empty($request['user']) || $request['user']['login'] !== $username) {
    return access_denied();
  }
  
  $data = $request['put'];
  $errors = [];
  
  if (empty($data['name'])) $errors[] = 'Не указано имя';
  if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Некорректный email';
  }
  
  if (!empty($errors)) {
    return json_response(['errors' => $errors], 400);
  }
  
  db_command(
    "UPDATE users SET name = ?, email = ?, phone = ? WHERE login = ?",
    $data['name'], $data['email'], $data['phone'] ?? '', $username
  );
  
  return json_response(['success' => true, 'message' => 'Данные обновлены']);
}
