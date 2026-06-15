<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'results' => [
        [
            'id' => 0,
            'stats' => [
                ['k' => 'alias', 'v' => 'MiniToon'],
                ['k' => 'level', 'v' => '42'],
                ['k' => 'gamesPlayed', 'v' => '150']
            ]
        ]
    ]
];

echo json_encode($data);