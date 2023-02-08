<?php
declare(strict_types=1);
require_once('University.php');
require_once('Teacher.php');

$university = new University("FUBK","Kalgo","KB_001");
$university2 = new University("FUTA","Ondo","OND_001");
$teacher1 = new Teacher("Bashar Umar",35,"Software Engineering",$university);
$teacher2 = new Teacher("Aminu Umar",40,"Business Administration",$university2);

$teacher1->prinTeacherDetails();
$teacher1->printUniversityDetails();
echo "--------------------------------------".PHP_EOL;
$teacher2->prinTeacherDetails();
$teacher2->printUniversityDetails();