<?php
class Tiger extends Animal{
    function __construct(Animal $animal,$isHunting){
        $this->name = $animal->name;
        $this->isHunting = $isHunting;

    }
    function makeSound(){
        echo "Grrrrh,Grhhhh".PHP_EOL;
        return $this;
    }
}