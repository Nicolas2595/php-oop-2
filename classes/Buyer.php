<?php
require_once __DIR__ . "/Persons.php";

    class Buyer extends Persons {

        //ATTRIBUTI/PROPRIETA'
        protected $creditCards = [];
        
        //METODI
        public function addCreditCard(CreditCard $creditCard) {
            $this->creditCards = $creditCard;
        }

    }
?>