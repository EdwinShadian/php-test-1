<?php

function echoSaveError() {
    echo "Ошибка сохранения!".PHP_EOL;
}

if (isset($_POST['data'])) {
    $content = htmlspecialchars($_POST['data'], ENT_QUOTES, 'UTF-8');
} else {
    echoSaveError();
    die();
}

if (file_put_contents('./output.txt', $content)) {
    echo "Данные сохранены!".PHP_EOL;
} else {
    echoSaveError();
}
