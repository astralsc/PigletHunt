<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'inFlight' => [
    [
      'service' => 'string',
      'messageId' => 'string',
      'method' => 'string',
      'path' => 'string',
      'body' => 'string',
      'shard' => 'string',
      'gamerTag' => 0,
      'limitFailureRetries' => true
    ]
  ],
  'gamerTag' => 71880669866436610,
  'allGroups' => [
    [
      'id' => 0,
      'subGroups' => [
        null
      ],
      'joined' => 0
    ]
  ],
  'updated' => 1776317744699,
  'member' => [
    'guild' => [
      [
        'id' => 0,
        'subGroups' => [
          null
        ],
        'joined' => 0
      ]
    ],
    'subgroup' => [
      [
        'id' => 0,
        'subGroups' => [
          null
        ],
        'joined' => 0
      ]
    ]
  ],
  'scores' => [
    [
      'board' => 'string',
      'derivatives' => [
        'string'
      ],
      'score' => 0
    ]
  ]
];

echo json_encode($data);