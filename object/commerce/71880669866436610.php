<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
  'stores' => [
    [
      'listings' => [
        [
          'clientDataList' => [
            [
              'name' => 'string',
              'value' => 'string'
            ]
          ],
          'symbol' => 'string',
          'clientData' => [
            'additionalProp' => 'string'
          ],
          'cooldown' => 0,
          'secondsActive' => 0,
          'offer' => [
            'coupons' => 0,
            'price' => [
              'type' => 'string',
              'symbol' => 'string',
              'amount' => 0,
              'schedule' => [
                0
              ]
            ],
            'buttonText' => 'string',
            'titles' => [
              'string'
            ],
            'symbol' => 'string',
            'obtainItems' => [
              [
                'contentId' => 'string',
                'properties' => [
                  [
                    'name' => 'string',
                    'value' => 'string'
                  ]
                ]
              ]
            ],
            'obtainCurrency' => [
              [
                'symbol' => 'string',
                'amount' => 0,
                'originalAmount' => 0
              ]
            ],
            'images' => [
              'string'
            ],
            'descriptions' => [
              'string'
            ],
            'obtain' => [
              'string'
            ]
          ],
          'queryAfterPurchase' => true,
          'purchasesRemain' => 0,
          'secondsRemain' => 0,
          'active' => true
        ]
      ],
      'symbol' => 'string',
      'nextDeltaSeconds' => 0,
      'title' => 'string',
      'secondsRemain' => 0
    ]
  ]
];

echo json_encode($data);