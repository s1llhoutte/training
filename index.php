<?php

function sayHello() {
    echo 'hello';
    echo 'lalalal';
    $name = 'Vasya';
    echo $name;
}

//sayHello();


// домашка

function sum($a, $b) {
    $sum = $a + $b;
    echo $sum;
}

echo 'Первый результат :' . sum(115,10) . "\n";

function minus($b, $c) {
    $min = $b - $c;
    echo $min;
}

echo 'Второй результат :' . minus(45, 63) . "\n";

function delete($d, $f) {
    $del = $d / $f;
    echo $del;
}

echo 'Третий результат :' . delete(125, 5) . "\n";

function deleteSum($a, $b, $c) {
    $result = $a / ($b+$c);
    echo $result;
}

echo 'Четвертый результат :' . deleteSum(150, 2, 6) . "\n";