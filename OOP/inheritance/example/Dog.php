<?php
class Dog extends Animal{
   
    function __construct(Animal $animal,$isHunting){
        $this->name = $animal->name;
        $this->isHunting = $isHunting;

    }
    function makeSound(){
        echo "Wuf wuf".PHP_EOL;
    }
}