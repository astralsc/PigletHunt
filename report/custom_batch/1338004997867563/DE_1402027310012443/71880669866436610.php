<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'results' => [
        [
            'reportId'  => '1338004997867563',
            'customerId' => 'DE_1402027310012443',
            'version'   => '1',
            'report'    => [
                'entries' => [
                    [
                        'ts'     => '1700000000000',
                        'event'  => 'custom_event',
                        'value'  => '1',
                    ]
                ]
            ]
        ]
    ]
];

echo json_encode($data);