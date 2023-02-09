<?php
Interface Animals{
    function makeSound();
}
class Dog implements Animals{
    function makeSound():void
    {
        echo "woof woof".PHP_EOL;
    }
}
class Cat implements Animals{
    function makeSound():void
    {
        echo "Meow".PHP_EOL;
    }
}
$dog = new Dog();
$dog->makeSound();
$cat = new Cat();
$cat->makeSound();