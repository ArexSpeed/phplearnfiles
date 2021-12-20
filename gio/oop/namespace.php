<?php

//exapmles of namespace using

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../Notification/Email.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Paddle/Transaction.php';

use PaymentGateway\Paddle\{Transaction, CustomerProfile}; //when more thanm 1 class in file
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction;
$stripeTransaction = new StripeTransaction;
$paddleCustomerProfile = new CustomerProfile;

var_dump($paddleCustomerProfile, $paddleTransaction, $stripeTransaction);

//Docs https://www.php.net/manual/en/language.namespaces.php
// Rules https://www.php.net/manual/en/language.namespaces.rules.php