<?php

class Person
{
    public $name = 'Bob';
    public $age = 20;
    public $job = 'developer';

    public function __construct($name, $age, $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }

    public function sayHello()
    {
        echo 'Hello, i\'m Bob';
    }

}

class Developer extends Person
{
    public $timePerWeek = 20;

    public function __construct($name, $age, $job, $timePerWeek)
    {
        parent::__construct($name, $age, $job);
        $this->timePerWeek = $timePerWeek;
    }

    public function work()
    {
        echo 'developer is working';
    }

}

class Director extends Person
{
    public function work()
    {
        echo 'director is working';
    }
}

class Manager extends Person
{
    public function work()
    {
        echo 'manager is working';
    }
}

$developer = new Developer('John', 23, 'manager',20);
echo $developer->timePerWeek;



// Домашка
//class Plant
//{
//    public $color;
//    public $price;
//    public $place;
//
//    public function __construct($color, $price, $place)
//    {
//        $this->color = $color;
//        $this->price = $price;
//        $this->place = $place;
//    }
//}
//
//class Akaciya extends Plant
//{
//    public function plants()
//    {
//        echo 'Akacia life is matter';
//    }
//}
//
//$akaciya = new Akaciya('green', '120 grn', 'sun');
//echo $akaciya->color;
//
//class Mushroom extends Plant
//{
//    public function plants()
//    {
//        echo 'mushroom is also plant';
//    }
//}
//
//$myxomor = new Mushroom('red', '10 grn', 'forest');
//echo $myxomor->place;