<?php

/*** Galaxia system routes -- Please don't change them ***/
Route::get('galaxia/xhttp-get/{component}/{action/}{param1?}/{param2?}', 'Laraning\Galaxia\Controllers\XhttpGet@bridge')
     ->name('galaxia.httpget');

Route::get('galaxia/login', 'Laraning\Galaxia\Features\Login\Controllers\FeatureController@show')->name('galaxia.login.show');
