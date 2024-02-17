<?php

use Jenssegers\Blade\Blade;

function view($view, $data = [])
{

    $views = VIEWPATH;
    $cache = APPPATH . 'cache';

    $blade = new Blade($views, $cache);

    echo $blade->make($view, $data)->render();
}
function assets_url($path)
{
    // Get the base URL from the config
    $base_url = config_item('base_url');

    // Get the assets folder from the config
    $assets_folder = config_item('assets_folder');

    // Combine the base URL and assets folder with the provided path
    $url = rtrim($base_url, '/') . '/' . ltrim($assets_folder, '/') . '/' . ltrim($path, '/');

    return $url;
}
