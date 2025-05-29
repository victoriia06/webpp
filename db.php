<?php
// Подключение к базе данных (использует настройки из settings.php)
global $db;
try {
  $db = new PDO(
    'mysql:host=' . conf('localhost') . ';dbname=' . conf('u70422'), 
    conf('u70422'), 
    conf('4545635'),
    array(
      PDO::MYSQL_ATTR_FOUND_ROWS => true, 
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    )
  );
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}

// Функция для получения одной строки
function db_row($stmt) {
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Функция для получения информации об ошибке
function db_error() {
  global $db;
  return $db->errorInfo();
}

// Функция для выполнения запроса с несколькими строками
function db_query($query) {
  global $db;
  $args = func_get_args();
  $query = array_shift($args);
  
  $stmt = $db->prepare($query);
  $stmt->execute($args);
  return $stmt;
}

// Функция для выполнения запроса с одной строкой результата
function db_result($query) {
  global $db;
  $args = func_get_args();
  $query = array_shift($args);
  
  $stmt = $db->prepare($query);
  $stmt->execute($args);
  $row = $stmt->fetch(PDO::FETCH_NUM);
  return $row ? $row[0] : FALSE;
}

// Функция для выполнения команд (INSERT, UPDATE, DELETE)
function db_command($query) {
  global $db;
  $args = func_get_args();
  $query = array_shift($args);
  
  $stmt = $db->prepare($query);
  return $stmt->execute($args);
}

// Функция для получения последнего вставленного ID
function db_insert_id() {
  global $db;
  return $db->lastInsertId();
}
