<?php
class University{
    protected $universityName = "UDUS";
    function helloUniversity(){
        echo "Hello from {$this->universityName}".PHP_EOL; 
    }

}
class Teacher extends University{
    public $teacherName = "Bashar";
    function helloTeacher(){
        echo "Hello {$this->teacherName}".PHP_EOL;
    }
    function getUniversityName(){
        return $this->universityName;
    }

}
class PartTimeTeacher extends Teacher{
    function getUniversityName(){
        return $this->universityName;
    }
}
$teacher1 = new Teacher();
$teacher1->helloTeacher();
$teacher1->helloUniversity(); // Using Child object to call the parent method
echo $teacher1->getuniversityName().PHP_EOL;
$p = new PartTimeTeacher();
echo $p->getuniversityName().PHP_EOL;