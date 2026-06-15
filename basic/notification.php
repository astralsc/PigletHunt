<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'subscribeKey' => 'sub-c-abc123',
    'gameNotificationChannel' => 'game-notify-1234567890',
    'gameGlobalNotificationChannel' => 'game-global-1234567890',
    'playerChannel' => 'player-9876543210',
    'playerForRealmChannel' => 'player-realm-9876543210',
    'customChannelPrefix' => 'custom-',
    'authenticationKey' => 'auth-key-abc123'
];

echo json_encode($data);