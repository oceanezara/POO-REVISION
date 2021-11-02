<?php
    class Personne {
        private string $lastname;
        private string $firstname;
        private string $address;
        private string $DoB;

        public function __construct(string $lastname, string $firstname, string $DoB)
        {
            $this->lastname = $lastname;
            $this->firstname = $firstname;
            $this->DoB = $DoB;
        }

        public function getLastname(): string
        {
            return $this->lastname;
        }

        public function setLastname(string $lastname): void
        {
            $this->lastname = $lastname;
        }

        public function getFirstname(): string
        {
            return $this->firstname;
        }

        public function setFirstname(string $firstname): void
        {
            $this->firstname = $firstname;
        }

        public function getAddress(): string
        {
            return $this->address;
        }

        public function setAddress(string $address): void
        {
            $this->address = $address;
        }

        public function getDob(): string
        {
            return $this->DoB;
        }

        public function setDoB(string $DoB): void
        {
            $this->DoB = $DoB;
        }

        public function getInfo (){
            echo 'Lastname :' . $this->lastname. '<br>';
            echo 'Firstname :' . $this->firstname. '<br>';
            echo 'Address :' . $this->address. '<br>';
            echo 'Date of birth :' . $this->DoB. '<br>';
        }

        public function calculateAge(){
            $today = date("Y-m-d");
            $diff = date_diff(date_create($this->DoB), date_create($today));
            return 'Age is :' .$diff->format('%y');
        }
    }