<?php

if (!function_exists('package_path')) {
    function package_path($path)
    {
        $base = file_exists(base_path('vendor/laraning/galaxia')) ?
            'vendor' :
            'packages';

        return base_path("{$base}/laraning/galaxia/src/".$path);
    }
}

if (!function_exists('glxtable')) {
    function glxtable($table)
    {
        return config('galaxia.datable.table.prefix') . "_" . $table;
    }
}

if (!function_exists('glxguard')) {
    function glxguard()
    {
        return config('galaxia.auth.guard');
    }
}
