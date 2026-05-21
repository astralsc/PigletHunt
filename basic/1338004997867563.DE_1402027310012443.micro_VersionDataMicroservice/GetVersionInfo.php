<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    "ClientVersion" => "0.7.14",
    "Platform" => "STEAM"
];

echo json_encode($data);