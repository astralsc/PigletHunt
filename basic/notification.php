<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'status' => 200
];

echo json_encode($data);