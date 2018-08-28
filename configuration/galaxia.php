<?php

return [

    /*** Database parameters ***/
    'database' => [
        'table' => [
            // What's the prefix you want to have in Galaxia tables? No need to put the underscore.
            'prefix' => 'galaxia',
        ],
    ],

    /*** View parameters  ***/
    'views' => [
        'composers' => [
            'sidebar'       => App\Galaxia\ViewComposers\SidebarComposer::class,
            'breadcrumb'    => Laraning\Galaxia\UserInterface\ViewComposers\BreadcrumbComposer::class,
            'notifications' => Laraning\Galaxia\UserInterface\ViewComposers\NotificationListComposer::class,
        ],
    ],

    /*** Widget parameters ***/
    'widgets' => [
        'breadcrumb' => [
            'prefix' => [
                'delete-indexes' => 1,
            ],
        ],
    ],

    /*** Social links ***/
    'social' => [
        'facebook'  => 'a',
        'instagram' => 'b',
        'linkedin'  => 'c',
        'twitter'   => 'd',
        'reddit'    => 'e',
        'digg'      => 'f',
    ],

    /*** Authentication Guard  ***/
    'auth' => [
        'guard' => 'galaxia',
    ],
];