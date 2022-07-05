<?php

if (file_exists('./source.json')) {
    $content = file_get_contents('./source.json');
    $array = (array) json_decode($content);

    $years = $array['years'];

    foreach ($years as $year) {
        echo $year.PHP_EOL;
    }
}
else {
    echo 'Ошибка! Файл не найден!'.PHP_EOL;
    die();
}

