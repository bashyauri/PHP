<?php
class Student{
    private $name;
    private $class;
    function setName($name):void
    {
        $this->name = $name;
    }
    function getName():string
    {
        return $this->name;
    }
    function setClass($class):void
    {
        $this->class = $class;
    }
    function getClass():int
    {
        return $this->class;
    }
    function printDetails():void
    {
        echo "$this->name is in class  $this->class".PHP_EOL;
    }
}
$student1 = new Student();
$student1->setName("Bashar Umar");
$student1->setClass(2);
$student1->printDetails();

$student2 = new Student();
$student2->setName("Fatima Umar");
$student2->setClass(3);
$student2->printDetails();