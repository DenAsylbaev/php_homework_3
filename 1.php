<?php

$arr_1 = range(1, 10);
$arr_2 = range(11, 20);
$arr_multi = [];

foreach ($arr_1 as $index => $val) {
    $arr_multi[] = $arr_1[$index] * $arr_2[$index];
}
print_r($arr_multi);