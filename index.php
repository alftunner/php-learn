<?php

require_once 'functions.php';

$name = 'Artem';
$age = 29;
$sex = 'm';
$city = "Boston";

$arInfo = [
    'Boston' => [
        [
            'имя' => $name,
            'возраст' => $age,
            'пол' => $sex,
        ],
        [
            'имя' => 'Коля',
            'возраст' => 30,
            'пол' => 'm',
        ],
    ],
    'Voronezh' => [
        [
            'имя' => 'Толя',
            'возраст' => 22,
            'пол' => 'm',
        ],
        [
            'имя' => 'Маша',
            'возраст' => 32,
            'пол' => 'f',
        ],
    ]
];

foreach ($arInfo as $city => $value1)
{
    echo $city . ': ';
    if (is_array($value1)) {
        foreach ($value1 as $human) {
            if ($human['возраст'] > 22 && $human['возраст'] < 30)
                echo $human['имя'] . ' ';
        }
    } else {
        echo $value1;
    }
    echo '<br>';
}




