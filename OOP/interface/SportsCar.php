<?php
require_once "Cars.php";
require_once "CarModel.php";
class SportsCar implements Cars,CarModel{
    public function setModel($model){
        $this->model = $model;
    }
    public function getModel():string
    {
        return $this->model;
    }
    public function applyBreak(){
        echo "Applying Breaks".PHP_EOL;

    }
    public function increaseSpeed(){
        echo "Increasing Speed".PHP_EOL;


    }
    public function decreaseSpeed(){
        echo "Decreasing Speed".PHP_EOL;
        
    }
}