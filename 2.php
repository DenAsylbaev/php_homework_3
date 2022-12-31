<?php

$wishes = [
    'счастья',
    'здоровья',
    'терпения',
    'воображения',
];
$epithets = [
    'космического',
    'бесконечного',
    'безудержного',
    'богатырского',
];
$name = readline("Введите имя именинника: ");

$wisheRandomNumbers = array_rand($wishes, $num = 3);
$epithetRandomNumbers = array_rand($epithets, $num = 3);

foreach($wisheRandomNumbers as $index => $value) {
    $wisheArray[] = "$epithets[$value] $wishes[$value]";
}

$wisheArrayLastItem = array_pop($wisheArray);
$wisheText = implode(", ", $wisheArray);
$wisheText .= ' и '.$wisheArrayLastItem;

echo ("Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю $wisheText!\n");