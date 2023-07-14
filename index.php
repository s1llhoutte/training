<?php
$person = [
    'name' => 'Victor',
    'age' => 20,
    'hobby' => 'swimming',
    'is_married' => true,
    'pet' => 'cat',
    'pet_name' => 'Barsik'
];

print_r($person);

//как добавить в массив еще одно данное
$person1 = [
    'name' => 'Vasya',
    'age' => 20
];

$person1['hobby'] = 'cat';

print_r($person1);
//удалить значение в масиве
unset($person1['name']);

print_r($person1);




// Домашка
$person2 = [
    'name' => 'Danil',
    'age' => 21,
    'hobby' => 'developer',
    'is_married' => false,
    'pet' => 'nothing',
    'pet_name' => 'nothing'
];

$person3 = [
    'name' => 'Valik',
    'age' => 22,
    'hobby' => 'swimming',
    'is_married' => false,
    'pet' => 'cat',
    'pet_name' => 'Dasha'];

print_r($person2);
print_r($person3);