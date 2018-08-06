<?php

function package_path($path)
{
    $base = file_exists(base_path('vendor/laraning/galaxia')) ?
            'vendor' :
            'packages';

    return base_path("{$base}/laraning/galaxia/src/" . $path);
};
