<?php
class ChainMethods{
    public $name;
    // call this method first to change the value
    function method1(){
        echo "Hello from method1".PHP_EOL;
        $this->name = "Chain Methods";
        return $this;
    }
    //Call this method to display properties
    function method2(){
        echo "Hello from method2 ($this->name)".PHP_EOL;
    }
}
$cm = new ChainMethods();
$cm->method1()->method2();