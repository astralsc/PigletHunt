<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'room' => [
        'id' => 'room_001',
        'name' => 'General',
        'keepSubscribed' => true,
        'players' => [
            0
        ],
    ]
];

echo json_encode($data);