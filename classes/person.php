<?php 
    class Person{
        private $name;
        private $sex;
        private $age;
        public static $drinkingAge = 21;
        
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
        
        static function setDrinkingAge(int $newDA){
            self::$drinkingAge = $newDA;
        }

    }
?>
