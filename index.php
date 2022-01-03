<?php
    require("views/tags.lib.php");
    require('config/initdb.php');
    if(!isset($_GET['controller'])) {
        $code_error = 0;
        require('views/error.php');
    }
    else {
        if (isset($GLOBALS['db'])) {
            $controller = $_GET['controller'];
            if(file_exists('controllers/'.$controller.'.php')) require('controllers/'.$controller.'.php');
            else {
                $code_error = 1;
                require('views/error.php');
            }
        }
    }
