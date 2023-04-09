<?php

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = range(1, 10); //создает массив [1, 2, ... 10]
$multiple = [];

foreach ($arr1 as $key => $value) {
    $multiple[] = $arr1[$key] * $arr1[$key];
}

print_r($multiple);
