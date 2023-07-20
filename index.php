<?php

class Person
{
    public $name = 'Bob';
    public $age = 20;
    public $job = 'developer';

    public function sayHello()
    {
        echo 'Hello, i\'m Bob';
    }
}

class Developer extends Person
{
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

$manager = new Manager();
echo $manager->name;

$director = new Director();
$director->sayHello();


// Домашка

class Persona
{
    public $name = 'Victor';
    public $age = 34;
    public $hobby = 'swimming';
}

class Pojarnii extends Persona
{
    public function work()
    {
        echo 'Pojarnii is working';
    }
}

$pojarnii = new Pojarnii();
echo $pojarnii->name;

class Electric extends Persona
{
    public function work()
    {
        echo 'Electric is also working';
    }
}

$electric = new Electric();
echo $electric->age;