<?php
    interface Animals{
        function makeNoise();
    }

    class Cat implements Animals{
        function makeNoise()
            {return "meow";}
    }
    class Dog implements Animals{
        function makeNoise()
            {return "woof";}
    }

    class Feed{
        static function feedAnimal(Animals $animal){
            echo "feeding...";
            echo $animal->makeNoise();
        }
    }
    $animal1 = new Dog();
    Feed::feedAnimal($animal1);
    