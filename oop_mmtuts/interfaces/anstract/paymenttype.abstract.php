<?php

abstract class Visa {
    public function visaPayment(){
        return "Perfomr a payment";
    }

    abstract public function getPayment();
}