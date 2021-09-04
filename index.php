<?php
session_start();

$controller = $_GET['controller'] ?? 'Index';
$method = $_GET['method'] ?? 'index';

spl_autoload_register(function () {
    require_once "src/controller/UserController.php";
    require_once "src/controller/IndexController.php";
    require_once "src/models/User.php";
    require_once "src/db/Connection.php";
});

if(file_exists('./env.php')) {
    include './env.php';
}

if(!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);

        if ($value === false) {
            return $default;
        }

        return $value;
    }
}

$controller = "{$controller}Controller";
call_user_func([new $controller(), $method]);

