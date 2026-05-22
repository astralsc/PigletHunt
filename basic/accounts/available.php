<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'available' => true
];

echo json_encode($data);