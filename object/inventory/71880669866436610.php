<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'id' => 0,
    'currency' => [],
    'items' => [
        [
            'id' => 1,
            'contentId' => 'items.sword_01',
            'createdAt' => 1700000000000,
            'updatedAt' => 1700000000000,
            'properties' => [
                [
                    'name' => 'damage',
                    'value' => '50',
                ],
            ],
        ],
    ]
];

echo json_encode($data);