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

// # Booleans

$isComplete = true;

// int 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

// # Interegrs

// PHP_INT_MAX / PHP_INT_MIN
$dec = 5;
$hex = 0x2A; //-> 42
$oct = 055; //-> 45
$bin = 0b110; //-> 6
$ai2 = (int) 5.99; //-> 5
$ai3 = (int) '87asbd'; //-> 87
$ai3 = (int) 'test'; //-> 0
//$ai4 = 2_000_000_000; //-> var_dump($x4); -> int(2000000000)
//$ai5 = (int) 2_000_000_000; //-> var_dump($x4); -> int(2)
$ai6 = '2_000_000_000'; //-> var_dump($x4); -> string(13)

// # Floats

$af = 13.5e3; //-> 13500
//$af2 = 13.5e-3; //-> 0.0135
//$af3 = 13_000.5 //-> 13000.5
// PHP_FLOTAT_MAX / PHP_FLOAT_MIN
$af4 = floor((0.1 * 0.7) * 10); //-> 7
$af5 = ceil((0.1 * 0.7) * 10); //-> 8

// # String
$firstN = 'Will';
$lastN = 'Smith';
$name = $firstN . $lastN;
$specificChar = $name[1]; //i
$specificCharBack = $name[-2]; //t
//Change letter
$name[2] = 'G'; // WiGl Smith

//Heredoc
$text = <<<TEXT
Line $one
Line $two
Line3
TEXT;

echo $text; // Line1 Line2 Line3
echo nl2br($text); // convert to new line in all

// html posibble
$text2 = <<<TEXT
<div>
  <p>Hello</p>
  <p>World</p>
</div>
TEXT;

// Nowdoc

// # NULL

var_dump(is_null($x));
var_dump((array) $x); //-> array(0) {}

// # Arrays

$progLang = ['PHP', 'Java', 'Python'];
//$progLang = array('PHP', 'Java', 'Python'); old
echo $progLang[1]; //Java

// Mutate
$progLang[2] = 'C++';

// print more readble
echo '<pre>';
print_r($progLang);
echo '</pre>';

echo count($progLang); // 3

$progLang[] = 'Kotlin'; // push as last to array
array_push($progLang, 'GO', 'JS'); // push more
array_pop($progLang); // remove last
array_shift($progLang); // remove first

//add own key
$progKey = [
  'php' => '8.0',
  'python' => '3.5'
];

echo $progKey['php']; //-> 8.0
$progKey['go'] = '1.15'; //add new key

//multidimension
$progMulti = [
  'python' => [
    'creator' => 'Guido Van Rossum',
    'website' => 'www.python.org',
    'versions' => [
      ['version' => 3.9, 'relaseDate' => 'Oct 5, 2020'],
      ['version' => 3.8, 'relaseDate' => 'Oct 14, 2019'],
    ]
  ]
    ];
  
    echo $progMulti['python']['website']; // www.python.org

//overwriting index
$arr2 = ['a', 'b', 50 => 'c', 'd', 'e']; //-> [0] => a, [1] => b, [50] => c, [51] => d, [52] => e
unset($arr2[50]); // remove specify
unset($arr2[50], $arr2[1]); // remove more specify

$arr3 = ['a' => 1, 'b' => null];

var_dump(array_key_exists('a', $arr3)); //true
var_dump(isset($arr3['b'])); // false

?>
