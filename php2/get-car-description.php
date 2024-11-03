<?php

header('Access-Control-Allow-Origin: *');

if (isset($_GET['file'])) {
  $filename = $_GET['file'];
  $filepath = __DIR__ . '/txts/' . $filename;

  if (file_exists($filepath) && strpos($filepath, 'secret.php') === false) {
    header('Content-Type: text/plain');
    echo file_get_contents($filepath);
  } else {
    http_response_code(404);
    echo 'Archivo no encontrado';
  }
} else {
  http_response_code(400);
  echo 'Parámetro de archivo no proporcionado';
}
