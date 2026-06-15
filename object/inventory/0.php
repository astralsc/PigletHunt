<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'scope' => 'items,currencies',
    'currencies' => [
        [
            'id' => 'currency.gems',
            'amount' => 100,
            'properties' => [
                ['name' => 'color', 'value' => 'blue']
            ]
        ],
        [
            'id' => 'currency.gold',
            'amount' => 500,
            'properties' => []
        ]
    ],
    'items' => [
        [
            'id' => 'items.sword_01',
            'items' => [
                [
                    'id' => '1',
                    'createdAt' => 1700000000000,
                    'updatedAt' => 1700000000000,
                    'properties' => [
                        ['name' => 'damage', 'value' => '50'],
                        ['name' => 'durability', 'value' => '100']
                    ]
                ]
            ]
        ],
        [
            'id' => 'items.shield_01',
            'items' => [
                [
                    'id' => '2',
                    'createdAt' => 1700000000000,
                    'updatedAt' => 1700000000000,
                    'properties' => [
                        ['name' => 'defense', 'value' => '30']
                    ]
                ]
            ]
        ]
    ]
];

echo json_encode($data);