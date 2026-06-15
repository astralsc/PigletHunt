<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'access_token' => 'ec19461e-d299-40ae-9fa5-96bed4946a21',
    'token_type' => 'Bearer',
    'expires_in' => 864000000,
    'refresh_token' => '7827c20b-b220-43ac-b6fb-aea7a20c6808'
];

echo json_encode($data);