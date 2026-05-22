<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'currencies' => [
    [
      'id' => 'string',
      'amount' => 0,
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
  ],
  'items' => [
    [
      'id' => 'string',
      'items' => [
        [
          'updatedAt' => 0,
          'proxyId' => 'string',
          'id' => 0,
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
          ],
          'createdAt' => 0
        ]
      ]
    ]
  ],
  'scope' => 'string',
  'itemFilters' => [
    'contentTagFilter' => [
      'allOf' => [
        'string'
      ],
      'anyOf' => [
        'string'
      ],
      'noneOf' => [
        'string'
      ]
    ],
    'propertyFilters' => [
      [
        'key' => 'string',
        'predicate' => [
          'caseInsensitive' => true,
          'as' => 'string',
          'lower' => 'string',
          'upper' => 'string',
          'substr' => 'string',
          'values' => [
            'string'
          ],
          'kind' => 'string',
          'includeUpper' => true,
          'value' => 'string',
          'includeLower' => true
        ]
      ]
    ],
    'createdAt' => [
      'from' => 0,
      'to' => 0
    ],
    'updatedAt' => [
      'from' => 0,
      'to' => 0
    ]
  ]
];

echo json_encode($data);