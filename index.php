<?php
class Person{
    public $name = 'Victor';

    public $age = 20;

    public $isMarried = true;

    public function sayHello() {
        echo 'Hello, my friend\'s!';
    }
}

$person = new Person();
echo $person->name;
echo $person->age;
echo $person->isMarried;
$person->sayHello();


// Домашка
class Swimming{
    public $title = 'swimming';
    public $yearsOfTraining = '3 years';
    public function timeOfSwimming() {
        echo 'I\'m swimmin\'g 2 hour\'s per day';
    }
}

$swimming = new Swimming();
echo $swimming->title;
echo $swimming->yearsOfTraining;
$swimming->timeOfSwimming();

class Gym{
    public $title = 'Gym';
    public $year = '1 year';
    public $isCoach = true;
    public function timeOfTraining() {
        echo 'I train 1 hour per day';
    }
}

$jock = new Gym();
echo $jock->title;
echo $jock->year;
echo $jock->isCoach;
$jock->timeOfTraining();