<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    "ClientVersion" => "1.0.7",
    "Platform" => "STEAM",
    'Id' => ''
];

echo json_encode($data);
