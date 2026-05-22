<?php
http_response_code(200);
header('Content-Type: application/json');

$data = [
    'stores' => [
        [
            'symbol' => 'special_offer',
            'listings' => [
                [
                    'symbol' => 'lto_10for10newplayerstarterpack_t10_offer',
                    'offer' => [
                        'symbol' => 'lto_10for10newplayerstarterpack_t10_offer',
                        'titles' => [
                            'WARP SPEED!',
                            '',
                            '',
                            'Purchase this high value limited time offer to get <b>100 Starter Pack Pulls!</b> at 80% reduced price! This offer <b>guarantees 10 Super-rare or Legendary Crew Beholds</b> and <b>90 Rare Ship Schematics or Rare Crew!</b>'
                        ],
                        'descriptions' => [
                            '',
                            '',
                            '+500 VIP POINTS'
                        ],
                        'images' => [
                            [
                                'medium' => [
                                    'file' => '',
                                    'atlas_info' => ''
                                ],
                                'small' => [
                                    'file' => 'store/offers/10for10newplayerstarterpack_t10_offer.png',
                                    'atlas_info' => ''
                                ],
                                'large' => [
                                    'file' => '',
                                    'atlas_info' => ''
                                ]
                            ]
                        ],
                        'obtain' => [
                            [
                                'ent' => 'gift_direct_game_item',
                                'count' => '10',
                                'spec' => 'premium_10x_starter_bundle'
                            ],
                            [
                                'ent' => 'gift_direct_game_reward',
                                'count' => '500',
                                'spec' => 'vip'
                            ]
                        ],
                        'obtainCurrency' => [],
                        'obtainItems' => [],
                        'price' => [
                            'type' => 'sku',
                            'symbol' => 'offer_t10'
                        ],
                        'coupons' => 0,
                        'buttonText' => ''
                    ],
                    'secondsRemain' => 72539,
                    'secondsActive' => 100260,
                    'purchasesRemain' => 2,
                    'clientData' => [
                        'content_type' => 'primary',
                        'click_target' => 'SpecialOfferPanel:special_offer',
                        'click_action' => 'link',
                        'render_component' => 'special_offer_3x2'
                    ],
                    'clientDataList' => [
                        [
                            'name' => 'content_type',
                            'value' => 'primary'
                        ],
                        [
                            'name' => 'click_target',
                            'value' => 'SpecialOfferPanel:special_offer'
                        ],
                        [
                            'name' => 'click_action',
                            'value' => 'link'
                        ],
                        [
                            'name' => 'render_component',
                            'value' => 'special_offer_3x2'
                        ]
                    ],
                    'active' => true,
                    'queryAfterPurchase' => true
                ],
                [
                    'symbol' => 'lto_newplayercrewequipdilenergy_t10_offer_listing',
                    'offer' => [
                        'symbol' => 'lto_newplayercrewequipdilenergy_t10_offer',
                        'titles' => [
                            'ONWARD!',
                            '',
                            '',
                            'Purchase this high value limited time offer to get 3 Super Rare Iconic Crew (4* Captain Janeway, 4* Roman Captive Kirk, 4* Mirror McCoy), 500 Chronitons, and 650 Dilithium! <b>Purchase Limit: 2</b>'
                        ],
                        'descriptions' => [
                            '',
                            '',
                            '+500 VIP POINTS'
                        ],
                        'images' => [
                            [
                                'medium' => [
                                    'file' => '',
                                    'atlas_info' => ''
                                ],
                                'small' => [
                                    'file' => 'store/offers/lto_newplayercrewequipdilenergy_t10.png',
                                    'atlas_info' => ''
                                ],
                                'large' => [
                                    'file' => '',
                                    'atlas_info' => ''
                                ]
                            ]
                        ],
                        'obtain' => [
                            [
                                'ent' => 'gift_direct_game_reward',
                                'count' => '650',
                                'spec' => 'premium_purchasable'
                            ],
                            [
                                'ent' => 'gift_direct_game_reward',
                                'count' => '500',
                                'spec' => 'energy'
                            ],
                            [
                                'ent' => 'gift_direct_game_reward',
                                'count' => '1',
                                'spec' => 'janeway_coffee_crew'
                            ],
                            [
                                'ent' => 'gift_direct_game_reward',
                                'count' => '1',
                                'spec' => 'kirk_romancaptive_crew'
                            ],
                            [
                                'ent' => 'gift_direct_game_reward',
                                'count' => '1',
                                'spec' => 'mccoy_mirror_crew'
                            ],
                            [
                                'ent' => 'gift_direct_game_reward',
                                'count' => '500',
                                'spec' => 'vip'
                            ]
                        ],
                        'obtainCurrency' => [],
                        'obtainItems' => [],
                        'price' => [
                            'type' => 'sku',
                            'symbol' => 'offer_t10'
                        ],
                        'coupons' => 0,
                        'buttonText' => ''
                    ],
                    'secondsRemain' => 72539,
                    'secondsActive' => 100260,
                    'purchasesRemain' => 2,
                    'clientData' => [
                        'content_type' => 'primary',
                        'click_target' => 'SpecialOfferPanel:special_offer',
                        'click_action' => 'link',
                        'render_component' => 'special_offer_3x2'
                    ],
                    'clientDataList' => [
                        [
                            'name' => 'content_type',
                            'value' => 'primary'
                        ],
                        [
                            'name' => 'click_target',
                            'value' => 'SpecialOfferPanel:special_offer'
                        ],
                        [
                            'name' => 'click_action',
                            'value' => 'link'
                        ],
                        [
                            'name' => 'render_component',
                            'value' => 'special_offer_3x2'
                        ]
                    ],
                    'active' => true,
                    'queryAfterPurchase' => true
                ]
            ],
            'nextDeltaSeconds' => 4338
        ]
    ]
];

echo json_encode($data);