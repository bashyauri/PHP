<?php
/**
 * 
 */
trait DatabaseHelper
{
    function getRecords():void
    {
        echo "Here are your records".PHP_EOL;
    }
    
}
trait StringHelper
{
    function removeSpaces($string):string
    {
        return trim($string);
    }
    
}
class student
{
    use DatabaseHelper;
    use StringHelper;
    function connectDB()
    {
        $this->getRecords();
        echo $this->removeSpaces("  charlie");
    }

}
$student1 = new Student();
$student1->connectDB();