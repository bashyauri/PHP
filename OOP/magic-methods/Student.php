<?php
class Student{
    private $id;
    private $name; 
    function __set($name, $value){
        echo "This is called when set method is not found".PHP_EOL;
        echo $name.PHP_EOL;
        echo $value.PHP_EOL;
        
    }
    function __get($name)
    {
        echo "This is called when set method is not found".PHP_EOL;
        echo $name.PHP_EOL;
    }
}
$student1 = new Student();
$student1->id = "Test";
echo $student1->id.PHP_EOL;