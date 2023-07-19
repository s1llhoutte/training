<?php
class Person{
    public $name = 'Bob';
    public $age = 20;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
}

$person = new Person();
$person2= new Person();
$person3 = new Person();

$person->setName('Vasya');
$person->setAge(30);
echo $person->name;
echo $person->age;

echo $person->getName();
echo $person->getAge();


// домашка
class Cat{
    public $name = 'Murka';
    public $age = 5;

    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
}

$murka = new Cat();
$murka->setName("Barsik");
echo $murka->name;
$murka->setAge(3);
echo $murka->age;

class Dog{
    public $name = 'Erophei';
    public $age = 9;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

$dog = new Dog();
$dog->setName('Chapa');
echo $dog->getName();
$dog->setAge(3);
echo $dog->getAge();