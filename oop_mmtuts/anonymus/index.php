<?php

include_once "classes/simpleclass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();


//Annonymus Class
$newObj = new class(){
    public function helloWorld(){
        echo "Hellow World";
    }
};

$newObj->helloWorld();