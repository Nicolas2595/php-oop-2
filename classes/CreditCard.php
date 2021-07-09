<?php
    class CreditCard {
        
        //ATTRIBUTI/PROPRIETA'
        protected $type;
        protected $number;
        protected $cvc;

        //COSTRUTTORE
        public function __construct($type, $number, $cvc) {
            $this->type = $type;
            $this->number = $number;
            $this->cvc = $cvc;
        }

        //METODI
        public function getType() {
            return $this->type;
        }

        public function getNumber(){
            return $this->number;
        }

        public function getCvc() {
            return $this->cvc;
        }

    }
?>