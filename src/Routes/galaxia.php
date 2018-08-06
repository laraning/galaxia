<?php

/* Demo route. You can delete it when you have your admin panel created. */
Route::get('galaxia/demo', 'App\Galaxia\Features\Demo\Controllers\FeatureController@index')
     ->name('galaxia.demo');
