<?php
$person = [
    'name' => 'Victor',
    'age' => 20,
    'hobby' => 'swimming',
    'is_married' => true,
    'pet' => 'cat',
    'pet_name' => 'Barsik'
];

foreach ($person as $key => $item) {
    echo $key . ": ";
    echo $item . "\n";
}






//Домашка
$person2 = [
    'name' => 'Danil',
    'age' => 21,
    'hobby' => 'developer',
    'is_married' => false,
    'pet' => 'nothing',
    'pet_name' => 'nothing'
];

foreach ($person2 as $key => $item) {
    echo "$key" . ': ';
    echo "$item" . "\n";
}

$person3 = [
    'name' => 'Valik',
    'age' => 22,
    'hobby' => 'swimming',
    'is_married' => false,
    'pet' => 'cat',
    'pet_name' => 'Dasha'
];

foreach ($person3 as $key => $item) {
    echo $key . ": ";
    echo $item . "\n";
}