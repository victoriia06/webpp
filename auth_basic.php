<?php
function auth(&$request, $r) {
  if (!empty($_SESSION['user'])) {
    $request['user'] = $_SESSION['user'];
    return;
  }

  if (!empty($_SERVER['PHP_AUTH_USER'])) {
    $user = db_row(db_query(
      "SELECT * FROM users WHERE login = ? AND password = ?",
      $_SERVER['PHP_AUTH_USER'],
      $_SERVER['PHP_AUTH_PW']
    ));

    if ($user) {
      $_SESSION['user'] = $user;
      $request['user'] = $user;
      return;
    }
  }

  header('WWW-Authenticate: Basic realm="Drupal Support"');
  header('HTTP/1.0 401 Unauthorized');
  exit;
}
