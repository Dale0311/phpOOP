<?php 
    class person{
        private $firstname;
        private $lastname;
        private $sex;
        private $age;

        // get
        function getFirstname(){
            return $this->firstname;
        }
        // set
        function setFirstname($newFirstname){
            return $this->firstname = $newFirstname;
        }
    }
?>
