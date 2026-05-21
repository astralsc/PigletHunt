<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'customChannelPrefix' => '',
    'playerForRealmChannel' => '',
    'authenticationKey' => '',
    'playerChannels' => [
        'string'
    ],
    'gameGlobalNotificationChannel' => '',
    'gameNotificationChannel' => '',
    'subscribeKey' => '',
    'playerChannel' => ''
];

echo json_encode($data);