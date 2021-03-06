<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $className = strtolower($className);
    $path = 'classes/';
    $extension = '.class.php';
    $fileName = $path.$className.$extension;

    if(!file_exists($fileName)){
        return false;
    }
    include_once $fileName;
}