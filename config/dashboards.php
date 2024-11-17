<?php

return [
    'search_bar' => [
        'enabled' => true,
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
    'providers' => [
        '/' => [
            'cards' => [
                \Dashboards\Examples\Services\ChartBarExample::class,
                \Dashboards\Examples\Services\ChartBarExample2::class,
            ],
            'navigationName' => 'Home'
        ],
        'financeiro' => [
            'cards' => [
                \Dashboards\Examples\Services\ChartBarExample::class,
                \Dashboards\Examples\Services\ChartBarExample2::class,
            ],
            'navigationName' => 'Financeiro'
        ],
    ]
];
