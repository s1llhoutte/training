<?php

class Person
{
    public static $name;

    public static function sum($a, $b)
    {
        echo $a + $b;
    }

    public static function setName($name)
    {
        self::$name = $name;
    }
}

Person::setName('Vasya');
echo Person::$name;

$person = new Person();

$person::setName('Gleb');
echo $person::$name;

Person::sum(20, 30);


// Домашка
class Vichitanie
{
    public static function minus($a, $b)
    {
        echo $a - $b;
    }
}

Vichitanie::minus(35,10);

$matematika = new Vichitanie();
$matematika::minus(10,30);

abstract class Delenie
{
    public static function delete($a,$b)
    {
        echo $a / $b;
    }
}

Delenie::delete(10,2);