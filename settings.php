<?php
define('DISPLAY_ERRORS', 1);
define('INCLUDE_PATH', './api' . PATH_SEPARATOR . './modules');

$conf = array(
  'sitename' => 'Drupal Support',
  'theme' => './templates',
  'charset' => 'UTF-8',
  'clean_urls' => TRUE,
  'display_errors' => 1,
  'basedir' => '/',
  'db_host' => 'localhost',
  'db_name' => 'drupal_support',
  'db_user' => 'root',
  'db_psw' => '',
  'admin_mail' => 'admin@drupal-coder.ru'
);

$urlconf = array(
  '' => array('module' => 'front'),
  '/^api\/submit$/' => array('module' => 'form'),
  '/^profile\/(.+)$/' => array('module' => 'profile', 'auth' => 'auth_basic'),
  '/^admin$/' => array('module' => 'admin', 'auth' => 'auth_basic')
);

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Content-Type: text/html; charset=' . $conf['charset']);
session_start();
