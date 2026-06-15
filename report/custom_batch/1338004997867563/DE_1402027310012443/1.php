<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    [
        'type'      => 'custom_event',
        'timestamp' => 1700000000000,
        'gamer_tag' => 0,
        'shard'     => 'default'
    ]
];

echo json_encode($data);