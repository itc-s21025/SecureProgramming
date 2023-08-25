<?php
  session_start();
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: http://example.com/api/33-006.php');
  if (empty($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
  } else {
    $_SESSION['counter']++;
  }
  echo json_encode(array('count' => $_SESSION['counter']));