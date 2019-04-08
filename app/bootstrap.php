<?php

ini_set('display_errors','on');
error_reporting(E_ALL);

class BootStrap
{

    public static function start()
    {

        ini_set('display_errors','on');
        error_reporting(E_ALL);

        session_start();


        // PARAMS MYSQL
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'chat');
        define('DB_LOGIN', 'root');
        define('DB_PASSWORD', '');


        spl_autoload_register(array(__CLASS__, 'autoload'));



    }

    static function autoload($class){
        require 'model/' . $class . '.php';
    }


}