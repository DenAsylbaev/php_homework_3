<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 2,
        'Петров Петр' => 2,
        'Сидоров Артур' => 5,
        'Александров Саша' => 3,
    ],
    'БАП20' => [
        'Антонов Антон' => 5,
        'Артемов Дмитрий' => 2,
        'Андреева Евгения' => 3,
        'Гоголева Наталья' => 5,
        'Дмитриев Артем' => 4,
    ]
 ];

 //1
 foreach($students as $index => $groups) {
    $averageRate[$index] = array_sum($groups) / count($groups);
 }

$averageRateCopy = $averageRate;
arsort($averageRate);

if ($averageRateCopy === $averageRate) {
    foreach ($averageRate as $groupIndex => $groupRate) {
        echo ("Средний балл группы $groupIndex: $groupRate\n");
    }
} else {
    $resultRate = array_key_first($averageRate);
    echo ("Максимальный средний бал - у группы $resultRate: $averageRate[$resultRate]\n");
}

// 2
foreach($students as $index => $groups) {
    foreach($groups as $name => $rate) {
        if ($rate < 3) {
            $studentsForExit[$index][] = $name;
        }
    }
 }
print_r($studentsForExit);