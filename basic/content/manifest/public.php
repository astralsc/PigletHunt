<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'result' => 'ok',
  /*'items' => [
    [
      'updatedAt' => 1779194450868,
      'tags' => [
        'thetag'
      ],
      'uri' => 'http://localhost',
      'version' => '1',
      'checksum' => 'yes',
      'createdAt' => 0,
      'contentId' => '0',
      'type' => 'test'
    ]
  ],
  'createdAt' => 1779194450868,
  'latestUpdate' => 1779194450868*/
];

echo json_encode($data);