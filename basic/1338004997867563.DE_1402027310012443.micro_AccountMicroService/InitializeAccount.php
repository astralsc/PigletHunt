<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'AccountInitialized' => true
];

echo json_encode($data);