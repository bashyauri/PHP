<?php
require_once "Cars.php";
require_once "SportsCar.php";
$car1 = new SportsCar();

$car1->setModel('Ferrari');
echo "Car Model: " . $car1->getModel().PHP_EOL;
$car1->increaseSpeed();
$car1->decreaseSpeed();
$car1->applyBreak();