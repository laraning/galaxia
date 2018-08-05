<?php

Route::get('galaxia', 'Laraning\Galaxia\Features\Welcome\Controllers\FeatureController@default')
     ->name('galaxia.welcome');

Route::get('galaxia/xhttp-get/{component}/{action/}{param1?}/{param2?}', 'Laraning\Galaxia\Controllers\XhttpGet@bridge')
     ->name('galaxia.httpget');
