<?php

abstract class Person
{
    public $name;
    public $age;
    public $job;

    public function __construct($name, $age, $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }
}

class Developer extends Person
{
    public $timePerWeek;

    public function __construct($name, $age, $job, $timePerWeek)
    {
        parent::__construct($name, $age, $job);
        $this->timePerWeek = $timePerWeek;
    }
}

$developer = new Developer('Viktor', 20, 'developer', 20);
echo $developer->name;

abstract class Buildings
{
    public $price;
    public $size;
    public $buildings;

    public function __construct($price, $size, $buildings)
    {
        $this->price = $price;
        $this->size = $size;
        $this->buildings = $buildings;
    }
}

class Dacha extends Buildings
{
    public $time;

    public function __construct($price, $size, $buildings, $time)
    {
        parent::__construct($price, $size, $buildings);
        $this->time = $time;
    }
}

$dacha = new Dacha(200, '300 metrov', 'not big', '3 hours per week');
echo $dacha->buildings;


class Magazine extends Buildings
{
    public $time;
    public function __construct($price, $size, $buildings, $time)
    {
        $this->time = $time;
        parent::__construct($price, $size, $buildings);
    }
}

$stroitel = new Magazine(100, '500 m2', 'very big', '0,5 hours');
echo $stroitel->time;