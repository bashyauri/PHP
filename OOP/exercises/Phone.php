<?php
interface Phone{
    function makeCall($number);
    function sendMessage($number, $message);
}