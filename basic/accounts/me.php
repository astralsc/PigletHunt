<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'id' => 71880669866436608,
    'email' => 'greedycellhelp@gmail.com',
    'scopes' => ["*"],
    'thirdPartyAppAssociations' => [],
    'roleString' => 'admin'
];

echo json_encode($data);