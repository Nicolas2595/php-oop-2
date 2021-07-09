<?php
    class Products {

        // ATTRIBUTI/PROPRIETA'
        protected $brand;
        protected $price;
        protected $quantity;

        // COSTRUTTORE
        function __construct($brand, $price, $quantity){
            $this->brand = $brand;
            $this->quantity = $quantity;
            $this->price = $price;
        }

        //METODI
        public function getPrice() {
            return $this->price;
        }

        public function getQuantity(){
            return $this->quantity;
        }

        public function getBrand() {
            return $this->brand;
        }

    }
?>