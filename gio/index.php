<?php
 
// # Variables
 
//normal variables
$fname = 'Arek';
$fname = 'Nico';
echo $fname;
 
//constants variables
// * define('name', 'value')
define('STATUS_PAID', 'paid');
echo STATUS_PAID; //-> paid
echo defined('STATUS_PAID'); //-> 1 or none (check doeas have a value)
 
const STATUS = 'status';
echo STATUS; //-> status
 
// concat variables
$count = 'COUNT';
define('STATUS_' . $count, 4);
echo STATUS_COUNT; //-> 4
 
//magic constants
echo __LINE__; //print number line -> 25
echo __FILE__;
 
//variable variable
$foo = 'bar';
$$foo = 'bazz';
echo $foo, $$foo; //-> barbazz
echo "$foo, $$foo"; //-> bar, $bar
echo "$foo, ${$foo}"; //-> barbazz
 
// # Data Types & Type Casting
/*
 - Scaral Types
   * bool
   * int
   * float
   * string
   Check variables:
   var_dump($var); // show types i.e string(9) "Hello Gio"
 - Compound Types
  * array
     $companies = [];
     print_r($array);
  * object
  * callable
  * iterable
 - Special Types
  * resource
  * null
*/
 
function sum(int $x, int $y) { //the int change automatic to int
 var_dump($x, $y);
 return $x + $y;
}
 
$sum = sum(2, '3');
echo $sum; //-> 5
// Type Cast
$x = (int)"5";
var_dump($x); //-> int(5);
?>
