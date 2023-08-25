<?php
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: http://example.com/api/33-004.php');
  echo json_encode(['zipcode' => '100-0100', 'address' => '東京都大島町']);
