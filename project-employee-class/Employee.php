<?php
// Calculate Emloyee Salary
class Employee{
    private $id;
    private $name;
    private $working_hours_per_day = 8;
    private $hourly_rate = 15;
    private $total_leave_taken;
    private $working_days;

    function __construct($id, $name,$total_leave_taken){
        $this->id = $id;
        $this->name = $name;
        $this->total_leave_taken = $total_leave_taken;
     

        
    }
   function get_name():string
   {
    return $this->name;
   }
   function get_total_leave_taken():int
   {
    return $this->total_leave_taken;
   }
   function get_working_days():int
   {
    return $this->working_days;
   }


    function get_salary_amount($total_days):int
    {
        $this->working_days = $total_days - $this->total_leave_taken;
        $salary = $this->working_days * $this->working_hours_per_day * $this->hourly_rate;
        return $salary;
        
    }
    
}
$employee1 = new Employee(101,'Bashar Umar',4);

$salary = $employee1->get_salary_amount(20);
echo "{$employee1->get_name()} has worked for {$employee1->get_working_days()} hours and taken {$employee1->get_total_leave_taken()} leaves.".PHP_EOL;
echo "{$employee1->get_name()} salary is {$salary}".PHP_EOL;

$employee2 = new Employee(102,'Fatima',2);

$salary = $employee2->get_salary_amount(20);
echo "{$employee2->get_name()} has worked for {$employee2->get_working_days()} hours and taken {$employee2->get_total_leave_taken()} leaves.".PHP_EOL;
echo "{$employee2->get_name()}  salary is {$salary}".PHP_EOL;