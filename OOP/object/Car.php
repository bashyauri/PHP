<?php
class Car
{
    public $name;
    public $color;

    function sayHello(){
        echo "Hello from Car Class" . PHP_EOL;
    }
}
$car1 = new Car();
$car1->name = "Ferrari";
$car1->color = "red";
$car1->sayHello();
echo "$car1->name is $car1->color.".PHP_EOL;