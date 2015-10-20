<?php

require_once 'vendor/autoload.php';

use Students\Person;
use Students\Student;

$person = new Person();
$person->setFirstName('Vasya');
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

$array = [$student, $person];
echo '<br><br>output array:<br>';
foreach ($array as $person) {
    echo $person;
}