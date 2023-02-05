<?php
class Calculator{
    private $a;
    private $b;
    private $result;
    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        
    }
   
    function getA():int
    {
        return $this->a;
    }
    function getB():int
    {
        return $this->b;
    }
    function add()
    {
        $this->result = $this->a + $this->b;
        return $this;

    }
    function multiply(){
        $this->result = $this->a * $this->b;
        return $this;
    }
    function getResult(){
        return $this->result;
       
    }
   
    public function __destruct()
    {
        
        echo "The Result is $this->result".PHP_EOL;
    }
}
$calculator = new Calculator(50,5);
$result = $calculator->add()->getResult();