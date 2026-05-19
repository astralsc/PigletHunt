<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'results' => [
        [
            'id' => 71880669866436610,
            'stats' => []
        ]
    ]
];

echo json_encode($data);