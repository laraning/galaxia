<?php

return [

    /*** Database parameters ***/
    'database' => [
        'table' => [
            // What's the prefix you want to have in Galaxia tables? No need to put the underscore.
            'prefix' => 'galaxia'
        ]
    ],

    /*** Widget parameters ***/
    'widgets' => [
        /* Breadrumb parameters.
           Please check online documentation on the link:
            <link here>
        */
        'breadcrumb' => [
            'prefix' => [
                'delete' => ''
            ]
        ],
    ],

    'auth' => [
        // Default guard name to be used for authentication.
        'guard' => 'galaxia',
    ],
];
