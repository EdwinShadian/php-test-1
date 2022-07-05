<?php

$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь',
    ],
];

foreach ($arrayMonth as $item) {
    foreach ($item as $month) {
        echo $month.PHP_EOL;
    }
}
