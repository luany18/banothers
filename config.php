<?php
    $print = function($class){
        if(file_exists('class/'.$class.'.php')){
            include_once('class/'.$class.'.php');
        }
    };

    spl_autoload_register($print);
    define('HOST','localhost');
    define('DATABASE','cliente');
    define('USER','root');
    define('PASSWORD','');
    
    ?>
    
        
