<?php
return [
    [
        'key' => 'customer.settings.brcustomer',
        'name' => 'Brazilian Customer Attributes',
        'sort' => 100,
        'fields' => [
            [
                'name' => 'person_type',
                'title' => 'Enabled Person Types',
                'type' => 'multiselect',
                'validation' => 'required',
                'channel_based' => true,
                'locale_based'  => true,
                'options' => [
                    [
                        'title' => 'Person',
                        'value' => 'person'
                    ], [
                        'title' => 'Company',
                        'value' => 'company'
                    ],
                ],
                'info' => 'Select the types of person enabled in the store'
            ]
        ]
    ], [
        'key' => 'customer.settings.brcustomer_person',
        'name' => 'Person configurations',
        'sort' => 110,
        'fields' => [
            [
                'name' => 'show_general_register',
                'title' => 'Enable General Register?',
                'type' => 'boolean',
                'channel_based' => true,
                'locale_based'  => true,
            ],
        ]
    ], [
        'key' => 'customer.settings.brcustomer_company',
        'name' => 'Company configurations',
        'sort' => 120,
        'fields' => [
            [
                'name' => 'show_state_register',
                'title' => 'Enable State Register?',
                'type' => 'boolean',
                'channel_based' => true,
                'locale_based'  => true,
            ],
            [
                'name' => 'show_fantasy_name',
                'title' => 'Enable Fantasy Name?',
                'type' => 'boolean',
                'channel_based' => true,
                'locale_based'  => true,
            ],
        ]
    ]
];