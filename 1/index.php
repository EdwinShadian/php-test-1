<?php

$arrayNumber = [
    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
];

$internalArray = array_shift($arrayNumber);

foreach ($internalArray as $value) {
    echo $value.PHP_EOL;
}