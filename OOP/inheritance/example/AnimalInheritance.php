<?php
declare(strict_types=1);
require_once "Animal.php";
require_once "Tiger.php";

require_once('Dog.php');
$animal1 = new Animal("Tiger");
$animal2 = new Animal("Dog");

$tiger = new Tiger($animal1,True);
$dog = new Dog($animal2,False);
echo "----------Tiger--------------".PHP_EOL;
$tiger->makeSound();
$tiger->doesHunting();
echo "----------Dog--------------".PHP_EOL;
$dog->makeSound();
$dog->doesHunting();