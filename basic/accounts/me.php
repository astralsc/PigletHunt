<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'id' => 71880669866436610,
  'language' => 'en',
  'scopes' => [],
  'thirdPartyAppAssociations' => [],
  'deviceIds' => []
];

echo json_encode($data);