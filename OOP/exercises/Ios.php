<?php
class Ios implements Phone{
    function makeCall($number){
        echo "calling {$number}".PHP_EOL;
    }
    function sendMessage($number, $message){
        echo "sending phone no {$number} {$message}".PHP_EOL;
    }
}