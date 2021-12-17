<?php

  // require, require_once, include, include_once

  /*
  include - załącza coś do pliku w miejscu wystąpienia. W razie wystąpienia błędu jest to traktowane jako warning.
  include_once - załącza coś do pliku w miejscu wystąpienia. W razie próby ponownego załączenia tych samych danych dyrektywa ta zostanie zignorowana. W razie wystąpienia błędu jest to traktowane jako warning.
  require - załącza coś do pliku w miejscu wystąpienia. Jako że dane są wymagane (required) w razie wystąpienia błędu jest to traktowane jako fatal error.
  require_once - załącza coś do pliku w miejscu wystąpienia. W razie próby ponownego załączenia tych samych danych dyrektywa ta zostanie zignorowana. Jako że dane są wymagane (required) w razie wystąpienia błędu jest to traktowane jako fatal error.
  */

  include 'index.php';
  echo 'Hello World'; // Error and print Hello World

  require 'index.php';
  echo 'Hello Word'; // Error and Fatal Error

  require_once 'index.php'; //in index $x=5;
  $x++;
  echo $x; //-> 6 
  require_once 'index.php';
  echo $x; //->6 //-> 5 if require

  //reading repetetive files

  ob_start();
  include './partial/nav.php';
  $nav = ob_get_clean(); // echo same nav

  $nav = str_replace('About', 'About Us');

?>