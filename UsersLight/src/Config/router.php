<?php

return [

    'routes' => [

        'user/login' => [
            'user/login',
            'task=user&action=login',
            'namespace' => 'Users',
        ],

        'user/logout' => [
            'user/logout',
            'task=user&action=logout',
            'namespace' => 'Users',
        ],

        'page/login' => [
            'page/login',
            'task=page&action=login',
            'namespace' => 'Users',
        ]
    ]
];
