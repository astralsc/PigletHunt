<?php
http_response_code(200);
header('Content-Type => application/json');

$data = [
  'email' => 'string',
  'deviceIds' => [
    'string'
  ],
  'scopes' => [
    'string'
  ],
  'id' => 71880669866436610,
  'external' => [
    [
      'providerService' => 'string',
      'userId' => 'string',
      'providerNamespace' => 'string'
    ]
  ],
  'language' => 'string',
  'thirdPartyAppAssociations' => [
    'string'
  ]
];

echo json_encode($data);