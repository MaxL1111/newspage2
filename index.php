<?php

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];


$ctrl = $_GET['ctrl'] ?: 'News';
$action = $_GET['act'] ?: 'Index';

$controllerClassName = '\\App\\Controllers\\' . $ctrl;
$contloller = new $controllerClassName;

try {
    $contloller->action($action);
} catch (\App\Exceptions\Db $ex) {
    $obj = new \App\View();
    $obj->errors = $ex;
    $obj->display('error.php', '' , '', '');
}
