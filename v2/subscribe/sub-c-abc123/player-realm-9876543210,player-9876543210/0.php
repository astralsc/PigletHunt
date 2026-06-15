<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    't' => [
        't' => '17000000000000000',
        'r' => 12
    ],
    'm' => []
];

echo json_encode($data);