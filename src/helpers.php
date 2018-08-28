<?php

if (!function_exists('glx_table')) {
    function glx_table($table)
    {
        return config('galaxia.database.table.prefix').'_'.$table;
    }
}

if (!function_exists('glx_user')) {
    function glx_user()
    {
        return Auth::guard(glx_guard())->user();
    }
}

if (!function_exists('glx_guard')) {
    function glx_guard()
    {
        return config('galaxia.auth.guard');
    }
}
