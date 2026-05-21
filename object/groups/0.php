<?php
http_response_code(200);
header('Content-Type => application/json');

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
  'name' => 'string',
  'enrollmentType' => 'string',
  'donations' => [
    [
      'timeRequested' => 0,
      'progress' => [
        [
          'playerId' => 0,
          'amount' => 0,
          'time' => 0,
          'claimed' => true
        ]
      ],
      'satisfied' => true,
      'playerId' => 0,
      'currency' => [
        'updatedAt' => 0,
        'amount' => 0,
        'id' => 'string',
        'properties' => [
          [
            'name' => 'string',
            'value' => 'string'
          ]
        ],
        'proxy' => [
          'service' => 'string',
          'namespace' => 'string',
          'settings' => [
            'node' => 'string'
          ]
        ]
      ]
    ]
  ],
  'freeSlots' => 0,
  'maybeDonations' => [
    'additionalProp' => [
      'timeRequested' => 0,
      'progress' => [
        [
          'playerId' => 0,
          'amount' => 0,
          'time' => 0,
          'claimed' => true
        ]
      ],
      'satisfied' => true,
      'playerId' => 0,
      'currency' => [
        'updatedAt' => 0,
        'amount' => 0,
        'id' => 'string',
        'properties' => [
          [
            'name' => 'string',
            'value' => 'string'
          ]
        ],
        'proxy' => [
          'service' => 'string',
          'namespace' => 'string',
          'settings' => [
            'node' => 'string'
          ]
        ]
      ]
    ]
  ],
  'tag' => 'string',
  'canUpdateMOTD' => true,
  'shard' => 'string',
  'canUpdateSlogan' => true,
  'leader' => 0,
  'slogan' => 'string',
  'requirement' => 0,
  'motd' => 'string',
  'version' => 0,
  'id' => 0,
  'clientData' => 'string',
  'roles' => [
    [
      'name' => 'string',
      'permissions' => [
        'string'
      ]
    ]
  ],
  'scores' => [
    'additionalProp' => 'string'
  ],
  'canUpdateEnrollment' => true,
  'members' => [
    [
      'canDemote' => true,
      'canKick' => true,
      'role' => 'string',
      'gamerTag' => 0,
      'canPromote' => true,
      'scores' => [
        [
          'board' => 'string',
          'derivatives' => [
            'string'
          ],
          'score' => 0
        ]
      ]
    ]
  ],
  'canDisband' => true,
  'type' => 'guild',
  'maxSize' => 0,
  'subGroups' => [
    null
  ],
  'created' => 0
];

echo json_encode($data);