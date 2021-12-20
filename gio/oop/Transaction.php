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

  //constants
  class Transaction
  {
    const STATUS_PAID = 'paid';
    const STATUS_PENDING = 'pending';
    const STATUS_DECLINED = 'declined';
    //or
    public const ALL_STATUSES = [
      self::STATUS_PAID => 'Paid',
      self::STATUS_PENDING => 'Pending',
      self::STATUS_DECLINED => 'Declined'
    ];

    public function __construct() {
      $this->setStatus('pending');
      var_dump(self::STATUS_PAID); //self -> current class
    }

    public function setStatus(string $status): self {
      $this->status = $status;

      return $this;
    }
  }

  //# static properties & methods
  class Transaction {
    public static int $count = 0;

    public function __construct(public float $amount, public string $description){
      self::$count++;
    }

    public static function getCount(): int {
      return self::$count;
    }

    public function process() {
      echo 'Processing paddle transaction'
    }
  }