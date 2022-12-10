<?php

$year = null;

while (true) {
    $year = (int)readline("В каком году Москва была впервые упомянута в летописи: А)988, Б)1147, В)1223?\n");
    if ($year == 1147) {
        echo "Ответ правильный!";
        break;
    } else {
        echo "Ответ неправильный.";
        break;
    }
}
