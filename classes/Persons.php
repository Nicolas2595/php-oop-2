<?php
    class Persons {

        //ATTRIBUTI/PROPRIETA'
        public $firstname;
        public $lastname;
        public $email;
        public $password;
        public $age;

        //COSTRUTTORE
        public function __construct($firstname, $lastname, $age, $email, $password) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->email = $email;
            $this->password = $password;
        }
    }
?>