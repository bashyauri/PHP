<?php
abstract class Company{
    protected $name;
  
    function setName($name){
        $this->name = $name;
    }
    function getName():string
    {
        return $this->name;
    }
    abstract function setExpert($subject);

}
class Employee extends Company{
    public $subject;

    function setExpert($subject){
      $this->subject = $subject;    
    }
    function getExpert():string
    {
        return $this->subject;
    }
}


$employee1 = new Employee();
$employee1->setName("Brontobyte");

$employee1->setExpert("Software Engineering");
$expertise = $employee1->getExpert();
$name = $employee1->getName();
echo "{$name} company are Expert in {$expertise}".PHP_EOL;