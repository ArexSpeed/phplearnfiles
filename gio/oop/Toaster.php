<?php

namespace App;
class Toaster {
  protected array $slices;
  protected int $size;

  public function __construct() {
    $this->slices = [];
    $this->size = 2;
  }

  public function addSlice(string $slice): void {
    if (count($this->slices) < $this->size) {
      $this->slices[] = $slice;
    }
  }

  public toast() {
    foreach($this->slices as $i => $slice){
      echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
    }
  }
}

//in new file ToasterPro 
class ToasterPro extends Toaster {
  
  public function __construct() {
    parent::__construct();
    $this->size = 4;
  }

  public function addSlice(string $slice): void {
    parent::addSlice($slice);
  }

  public toastBagel() {
    foreach($this->slices as $i => $slice){
      echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
    }
  }
}

//copy in new file
class FancyOven {
  public function __construct(private ToasterPro $toaster) {

  }

  public function fry(){
    // fry stuff
  }

  public function toast(){
    $this->toaster->toast();
  }

  public function toastBagel() {
    $this->toaster->toastBagel();
  }
}

?>