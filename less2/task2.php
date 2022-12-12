<?php

do {
    $num = (int)readline("Введите количество задач, запланированных на день: ");
} while ($num <= 0);

$total = "Сегодня у вас запланировано $num приоритетных задач:\n";
$timeall = 0;

for ($i = 1; $i <= $num; $i++) {
    $task = readline("Введите задачу ");
    $time = (int)readline("Сколько времени займет эта задача? ");
    $total .= "- $task ({$time}ч)\n";
    $timeall += $time;
}

echo $total;
echo "Потребуется времени: {$timeall}ч.";
