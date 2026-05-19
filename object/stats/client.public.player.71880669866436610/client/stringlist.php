<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'id' => '71880669866436610',
    'stats' => [
        'achievements' => ['first_login', 'level_10', 'boss_defeated'],
        'equipped_items' => ['sword_01', 'helmet_03']
    ]
];

echo json_encode($data);