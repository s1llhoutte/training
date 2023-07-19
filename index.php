<?php
function getSum($a, $b) {
    $sum = $a + $b;
    echo 'Hello';
    return $sum;
}

$result = getSum(10, 5);
echo $result;

// or

echo getSum(10, 5);

// or

$num = getSum(10, 5);
echo $num + 20;


// Домашка

function getHomeSum($a, $b) {
    $sum = $a + $b;
    return $sum;
}

echo 'Первый результат: ' . getHomeSum(115,10) . "\n";

function getMinus($b, $c) {
    $min = $b - $c;
    return $min;
}

echo 'Второй результат: ' . getMinus(45, 63) . "\n";

function getDelete($d, $f) {
    $del = $d / $f;
    return $del;
}

echo 'Третий результат: ' . getDelete(125, 5) . "\n";

function getDeleteSum($a, $b, $c) {
    $result = $a / ($b+$c);
    return $result;
}

echo 'Четвертый результат: ' . getDeleteSum(150, 2, 6) . "\n";