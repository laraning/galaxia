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

if (!function_exists('get_uri_collection_without_bindings')) {
    /**
     * Gets the uri collection without bindings.
     *
     * @return \Illuminate\Support\Collection
     */
    function get_uri_collection_without_bindings()
    {
        $uri = get_uri_collection();

        // Remove { .. } items.
        $segments = $uri->filter(function ($value, $key) {
            return $value[0] != '{';
        });

        return $segments;
    }
}

if (!function_exists('get_uri_collection')) {
    /**
     * Gets the uri collection (segments).
     *
     * @return \Illuminate\Support\Collection
     */
    function get_uri_collection()
    {
        $router = app()->make('router');
        $segments = collect(explode('/', $router->getCurrentRoute()->uri));

        return $segments;
    }
}
