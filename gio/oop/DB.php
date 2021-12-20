<?php
namespace App;

class DB {
  private static ?DB $instance = null;

  //private can also print only 1 time, in this example if in index.db no matter how many time class DB will be call, always print only one, in public as musch as called
  private function __construct(public array $config) {
    echo 'Instance Created<br>';
  }

  public static function getInstance(array $config): DB {
    if (self::$instance === null) {
      self::$instance = new DB($config);
    }

    return self::$instance;
  }
}