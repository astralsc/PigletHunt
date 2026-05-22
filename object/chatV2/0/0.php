<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'rooms' => [
    [
      'id' => 'string',
      'name' => 'string',
      'keepSubscribed' => true,
      'players' => [
        0
      ]
    ]
  ]
];

echo json_encode($data);