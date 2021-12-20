<?php

require_once '../Transaction.php';
// Classes & Objects
$transaction = new Transaction();
//$transaction->amount = 15;

$transaction->addTax(8);
$transaction->applyDiscount(10);
var_dump($transaction->amount);
// or
$amount = (new Transaction(100, 'Transaction 1'))
  ->addTax(8)
  ->applyDiscount(10)
  ->getAmount();
var_dump($amount);

// or
$transaction1 = (new Transaction(100, 'Transaction 1'))
  ->addTax(8)
  ->applyDiscount(10);

$transaction2 = (new Transaction(100, 'Transaction 1'))
  ->addTax(8)
  ->applyDiscount(10);

var_dump($transaction1->getAmount, $transaction2->getAmount());

//get from constats (2nd class);
echo Transaction::STATUS_PAID;

//db get
$db = DB::getInstance([]);