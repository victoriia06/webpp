<?php
function front_get($request) {
  return array(
    'headers' => array('Content-Type' => 'text/html'),
    'entity' => file_get_contents('./index.html')
  );
}
