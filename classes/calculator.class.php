<?php 
    class Calculator{

        // // first option - where i created a static fn that takes parameters i don't need to create props
        // static function calc(int $num1, int $num2, string $operator){
        //     if($operator == "add"){
        //         return $num1 + $num2;
        //     }
        //     if($operator == "sub"){
        //         return $num1 - $num2;
        //     }
        //     if($operator == "div"){
        //         return $num1 / $num2;
        //     }
        //     if($operator == "multiply"){
        //         return $num1 * $num2;
        //     }
        // }


        // second option - i created a props and modifying those props in a method
        public static $num1;
        public static $num2;
        public static $operator;
        public static $result;

        static function calc2(){
            if(self::$operator == "add"){
                self::$result = self::$num1 + self::$num2;
            }
            elseif(self::$operator == "sub"){
                self::$result = self::$num1 - self::$num2;
            }
            elseif(self::$operator == "div"){
                self::$result = self::$num1 / self::$num2;
            }
            elseif(self::$operator == "multiply"){
                self::$result = self::$num1 * self::$num2;
            }
            return self::$result;
        }

        // third option where we instantiate object - but that's overkill since we're instantiating only one in this instance
    }