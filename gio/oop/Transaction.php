<?php
  declare(strict_types=1);

  class Transaction
  {
    public $amount; 
    public $description;

    public function __construct(float $amount, string $description) {
      $this->amount = $amount;
      $this->description = $description;
    }

    public function addTax(float $rate): Transaction {
      $this->amount += $this->amount * $rate / 100;

      return $this;
    }

    public function applyDiscount(float $rate): Transaction {
      $this->amount -= $this->amount * $rate / 100;

      return $this;
    }

    public function __destruct() {
      echo 'Destruct ' . $this->description . '<br>';
    }
  }