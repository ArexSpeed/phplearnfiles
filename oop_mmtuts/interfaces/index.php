<?php

include_once "anstract/paymenttype.abstract.php";
include_once "classes/BuyProduct.class.php";

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();


// <!-- ODC13 -->

// php
// interface PaymentInterface{
//     public function payNow();
// }
// interface LoginInterface{
//     public function loginFirst();
// }


// class Paypal implements PaymentInterface, LoginInterface{
//     public function liginFirst(){}
//     public function payNow(){}
//     public function paymentProcess(){
//         $this->loginFirst();
//         $this->payNow();
//     }
// }
// class BankTransfer implements PaymentInterface, LoginInterface{
//     public function liginFirst(){}
//     public function payNow(){}
//     public function paymentProcess(){
//         $this->loginFirst();
//         $this->payNow();
//     }
// }
// class Visa implements PaymentInterface{
//     public function payNow(){ }
//     public function paymentProcess(){
//         $this->payNow();
//     }
// }
// class Cash implements PaymentInterface{
//     public function payNow(){ }
//     public function paymentProcess(){
//         $this->payNow();
//     }
// }
// class BuyProduct{
//     public function pay(PaymentInterface $paymentType){
//         $paymentType->loginFirst();
//     }
// }

// $paymentType = new Cash();
// $buyProduct = new BuyProduct();
// $buyProduct->pay($paymentType); -->