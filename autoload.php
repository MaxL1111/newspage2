<?php


function my_app_autoload($class)
{
    include __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}

spl_autoload_register('my_app_autoload');

spl_autoload_register(function ($class) {
    include __DIR__ . '/lib/' . str_replace(['\\', 'App'], ['/', 'lib'], $class) . '.php';
});

include __DIR__. '/vendor/autoload.php';