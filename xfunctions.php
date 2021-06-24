<?php
function autoloader(string $class_name){
    $path='xmodule/class-'.$class_name.'.php';
    if(file_exists($path)){
        
        require_once $path;
    }
}
spl_autoload_register('autoloader');