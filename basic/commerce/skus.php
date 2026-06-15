<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'skus' => [
        'version' => 1700000000000,
        'created' => '2024-01-01T00:00:00.000Z',
        'definitions' => [
            [
                'name' => 'starter_pack',
                'description' => 'Starter Pack - 100 Gems',
                'realPrice' => 99,
                'productIds' => [
                    'itunes' => 'com.game.starter_pack',
                    'googleplay' => 'com.game.starter_pack',
                    'facebook' => 'com.game.starter_pack',
                    'steam' => 'com.game.starter_pack'
                ]
            ],
            [
                'name' => 'gem_pack_500',
                'description' => '500 Gems',
                'realPrice' => 499,
                'productIds' => [
                    'itunes' => 'com.game.gem_pack_500',
                    'googleplay' => 'com.game.gem_pack_500',
                    'facebook' => 'com.game.gem_pack_500',
                    'steam' => 'com.game.gem_pack_500'
                ]
            ]
        ]
    ]
];

echo json_encode($data);