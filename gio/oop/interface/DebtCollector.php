<?php

namespace App;

interface DebtCollector {
  public function collect(float $owedAmount): float;
}

// extends
// interface DebtCollector extends AnotherInterface {
//   public const MY_CONSTANT = 1;
//   public function __construct();
//   public function collect(float $owedAmount): float;
// }