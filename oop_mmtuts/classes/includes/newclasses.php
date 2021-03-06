<?php

//tylko napisanie
// class NewClass{
//     //Properties and Methods goes here
//     public $info = "This is some info";

// }

// $object = new NewClass;
// var_dump($object);

//odc 3-4
// class Person {
//     protected $first = "Arex";
//     private $last = "Speed";
//     private $age = "24";

//     // public function owner(){
//     //     $a = $this->first;
//     //     return $a;
//     // }
// }

// //EXTENDS jesli chcemy uzyc tej klasy nie zmieniajac obieku new Person
// class Pet extends Person{
//     public function owner(){
//         $a = $this->first;
//         return $a;
//     } 
// }

//ODC 5
// class Person {
//     //Properties
//     public $name;
//     public $eyeColor;
//     public $age;

//     public function __construct($name,$eyeColor, $age){
//         $this->name = $name;
//         $this->eyeColor = $eyeColor;
//         $this->age = $age;
//     }

//     //method
//     public function setName($name){
//         $this->name = $name;
//     }

//     public function getName(){
//         return $this->name;
//     }
//}

//ODC 8
class Person {
    //Properties
    public $name;
    public $eyeColor;
    public $age;

    public static $drinkingAge = 21;

    public function __construct($name,$eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //method
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getDA(){
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }
}