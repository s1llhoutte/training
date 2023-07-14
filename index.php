<?php
$persons = [
    [
        'name' => 'Victor',
        'age' => 20,
        'hobby' => 'swimming',
        'is_married' => true,
        'pet' => 'cat',
        'pet_name' => 'Barsik',
        'cars' => ['jigul', 'moskvich','volga']
    ],
    [
        'name' => 'Karl',
        'age' => 18,
        'hobby' => 'swimming',
        'is_married' => false,
        'pet' => 'cat',
        'pet_name' => 'Barsik'
    ],
    [
        'name' => 'Margo',
        'age' => 18,
        'hobby' => 'swimming',
        'is_married' => false,
        'pet' => 'cat',
        'pet_name' => 'Barsik'
    ]
];

//foreach ($persons as $person) {
//    if ($person ['is_married']) {
//        echo $person['name'];
//    }
//}

$flat = '20';
$name = 'Gena';
// && - значит и
// || - значит или
// != - значит не равно
// = - значит равно
// === - значит строго равно

if ($flat === 20 || $flat = 20) {
    echo 'Yes';
} else {
    echo 'No';
}






// Домашка

//$persons2 = [
//    [
//        'name' => 'Danil',
//        'age' => 21,
//        'hobby' => 'developer',
//        'is_married' => false,
//        'pet' => 'nothing',
//        'pet_name' => 'nothing'
//    ],
//    [
//        'name' => 'Valik',
//        'age' => 22,
//        'hobby' => 'swimming',
//        'is_married' => false,
//        'pet' => 'cat',
//        'pet_name' => 'Dasha',
//        'cars' => ['Toyota', 'jigul']
//    ]
//];
//
//foreach ($persons2 as $person) {
//    print_r($person['age']);
//}
