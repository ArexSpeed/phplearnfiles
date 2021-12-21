<?php

namespace App;

abstract class Field {
  public function __construct(protected string $name) {

  }

  abstract public function render(): string; //all extends methods need call render
}