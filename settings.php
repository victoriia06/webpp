<?php
// Настройки отображения ошибок
define('DISPLAY_ERRORS', 1);
define('INCLUDE_PATH', './api' . PATH_SEPARATOR . './modules');

// Основные настройки (ЗАМЕНИТЬ НАСТРОЙКИ БД НА СВОИ!)
$conf = array(
  'sitename' => 'Drupal Support',
  'theme' => './templates',
  'charset' => 'UTF-8',
  'clean_urls' => TRUE,
  'display_errors' => 1,
  'basedir' => '/',
  
  // НАСТРОЙКИ БАЗЫ ДАННЫХ - ЗАМЕНИТЕ ЭТИ ДАННЫЕ НА СВОИ!
  'db_host' => 'localhost',     // Хост БД
  'db_name' => 'u70422', // Имя базы данных
  'db_user' => 'u70422',          // Пользователь БД
  'db_psw' => '4545635',               // Пароль БД
  
  'admin_mail' => 'c.chon98@mail.ru'
);

// Маршрутизация
$urlconf = array(
  '' => array('module' => 'front'),
  '/^api\/submit$/' => array('module' => 'form'),
  '/^profile\/(.+)$/' => array('module' => 'profile', 'auth' => 'auth_basic'),
  '/^admin$/' => array('module' => 'admin', 'auth' => 'auth_basic')
);

// Заголовки
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: text/html; charset=' . $conf['charset']);

// Старт сессии
session_start();
