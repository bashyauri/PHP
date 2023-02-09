<?php
class Calculator{
    static public $result;
    static function add($a,$b):void
    {
        self::$result = $a + $b;
        
    }
}
Calculator::add(5,6);
echo Calculator::$result.PHP_EOL;