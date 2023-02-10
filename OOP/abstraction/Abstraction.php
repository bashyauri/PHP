<?php
abstract class Shape{
    protected $color = '';
    abstract function calculateArea();
    function getColor():string
    {
        return $this->color;
    }
}
class Rectangle extends Shape
{
    public $length;
    public $breadth;
    function __construct(string $color,int $length, int $breadth)
    {
        $this->color = $color;
        $this->length = $length;
        $this->breadth = $breadth;
    }
    function calculateArea():int
    {
        return $this->length * $this->breadth;
    }
}
class Circle extends Shape
{
    public $radius;
    function __construct(string $color,int $radius){
        $this->color = $color;
        $this->radius = $radius;
    }
     function calculateArea():float
     {
       return $this->radius * 3.142; 
     }
}
$rec = new Rectangle("Red",10,20);
echo $rec->calculateArea().PHP_EOL;
$circle = new Circle("Blue",5);
echo $circle->calculateArea().PHP_EOL;