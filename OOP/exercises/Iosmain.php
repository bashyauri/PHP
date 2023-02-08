<?php
require_once "Phone.php";
require_once "Ios.php";
$phone = new Ios();
$phone->makeCall("08038272560");
$phone->sendMessage("08038272560","Ana shaa ni");