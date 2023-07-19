<?php

function sayHello() {
    echo 'hello';
    echo 'lalalal';
    $name = 'Vasya';
    echo $name;
}

sayHello();


// домашка

function sum() {
    $sum = 5 + 10;
    echo $sum;
}
sum();

function minus() {
    $min = 150 - 10;
    echo $min;
}

minus();

function makeMeCoffee() {
    $coffee = 'Americano';
    $officiant = 'Maria';
    $text = $officiant . 'make me coffee, ' . $coffee;
    echo $text;
}

makeMeCoffee();