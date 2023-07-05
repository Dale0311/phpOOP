<?php 
    class person{
        private $name;
        private $sex;
        private $age;

        // constructor - are like parameters whenever we instantiate a object in the class
        function __construct($name, $sex, $age)
        {   
            $this->name = $name;
            $this->sex = $sex;
            $this->age = $age;
        }
        // getter
        function getter($varName){
            if( $varName == "name" || $varName == "Name" ){
                return $this->name;
            }elseif($varName == "sex" || $varName == "sex" ){
                return $this->sex;
            }
            else{
                return $this->age;
            }
        }
        // setter
        function setter($varName, $val){
            if( $varName == "name" || $varName == "Name" ){
                $this->name = $val;
            }elseif($varName == "sex" || $varName == "sex" ){
                $this->sex = $val;
            }
            else{
                $this->age = $val;
            }
        }
        function getAll(){
            return [$this->name, $this->sex, $this->age];
        }
    }
?>
