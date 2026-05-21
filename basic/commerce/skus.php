<?php
http_response_code(200);
header('Content-Type => application/json');

$data = [
    'skus' => [
        'version' => 1,
        'created' => 1779194450868,
        'definitions' => [
            [
                'name' => '',
                'description' => '',
                'realPrice' => 0,
                'productIds' => [
                    'additionalProp' => ''
                ]
            ]
        ]
    ]
];

echo json_encode($data);