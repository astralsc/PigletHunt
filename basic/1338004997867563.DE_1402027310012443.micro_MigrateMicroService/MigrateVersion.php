<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'AgreementVersion' => '1.0.7',
  'HasMigrated' => true
];

echo json_encode($data);