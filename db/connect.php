<?php

$link = mysqli_connect('localhost', 'mysql', 'mysql', 'service');

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    exit;
}

return $link;