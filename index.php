<?php

require_once 'vendor/autoload.php';

use Students\Person;
use Students\Student;
use Workers\Worker;

$person = new Person();
$person->setFirstName('Vasya');
//$person->firstName = 'Vasya';
$person->setLastName('Petrov');
$person->setBirthday('1989-01-01');

echo 'Person:';
echo $person->__toString();

$student = new Student();
$student->setFirstName('Kolya');
$student->setLastName('Ivanov');
$student->setBirthday('1989-02-03');
$student->setCourse(1);
$student->setUniversity('CHDTU');
//
echo '<br><br>';
echo 'Student:';
echo $student->__toString();

$worker = new Worker();
$worker->setFirstName('Senya');
$worker->setLastName('Petrov');
$worker->setBirthday('1989-03-04');
$worker->setCompany('Melkosoft');
$worker->setPosition('Dvornik');



$array = [$student, $person, $worker];
echo '<br><br>output array:<br>';
foreach ($array as $personItem) {
    echo $personItem;
    echo '<br>';
}