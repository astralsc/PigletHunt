<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'gt' => 0,
    'heartbeat' => 0
];

echo json_encode($data);