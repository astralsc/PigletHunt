<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'gamerTag' => 0,
  'member' => true,
  'type' => 'guild',
  'subGroups' => [
    0
  ],
  'group' => [
    'id' => 0,
    'name' => 'string',
    'tag' => 'string'
  ]
];

echo json_encode($data);