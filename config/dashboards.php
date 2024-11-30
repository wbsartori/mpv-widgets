<?php

return [
    'search_bar' => [
        'enabled' => false,
        'placeholder' => 'Pesquisar...',
        'button' => [
            'label' => 'Buscar',
            'icon' => 'search',
            'placeholder' => 'Busca rápida'
        ],
        'logo' => [
            'src' => 'https://via.placeholder.com/150',
            'enabled' => true
        ],
        'dropdown' => [
            'enabled' => true,
            'label' => 'Menu',
        ]
    ],
    'pages' => [
        '/' => [
            '/' => [
                'name' => 'index',
                'display' => 'Dashboards',
            ],
            'new' => [
                'name' => 'new',
                'display' => 'Dashboards/Novo',
            ],
            'edit' => [
                'name' => 'edit',
                'display' => 'Dashboards/Editar',
            ],
            'delete' => [
                'name' => 'index',
                'display' => 'Dashboards',
            ],
        ],
        'dashboards/cards' => [
            'dashboards/cards' => [
                'index' => [
                    'name' => 'index',
                    'display' => 'Dashboards',
                ],
                'new' => [
                    'name' => 'new',
                    'display' => 'Dashboards/Novo',
                ],
                'edit' => [
                    'name' => 'edit',
                    'display' => 'Dashboards/Editar',
                ],
                'delete' => [
                    'name' => 'index',
                    'display' => 'Dashboards',
                ],
            ]
        ],
    ]

//    'dashboards' => [
//        '/' => [
//            'cards' => [
//                \Dashboards\Examples\Services\ChartBarExample::class,
//                \Dashboards\Examples\Services\ChartBarExample2::class,
//                \Dashboards\Examples\Services\ChartBarExample2::class,
//            ],
//            'navigationName' => 'Home'
//        ],
//        'financeiro' => [
//            'cards' => [
//                \Dashboards\Examples\Services\ChartBarExample::class,
//                \Dashboards\Examples\Services\ChartBarExample::class,
//                \Dashboards\Examples\Services\ChartBarExample::class,
//                \Dashboards\Examples\Services\ChartBarExample2::class,
//                \Dashboards\Examples\Services\ChartBarExample2::class,
//            ],
//            'navigationName' => 'Financeiro'
//        ],
//    ]
];
