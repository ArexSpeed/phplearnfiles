<?php

$servername = 'localhost';
$user = 'root';
$pass = '';
$db = 'loginsys_tut';

$conn = mysqli_connect($servername, $user, $pass,$db);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}