<?php
class Animal{
    protected $name;
    protected $isHunting = False;
    
    
    public function doesHunting(){
        if($this->isHunting)
        echo "is Hunting".PHP_EOL;
        else
        echo "is  not Hunting".PHP_EOL;
    }

}