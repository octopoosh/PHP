<?php

$taskQue = "Какая задача стоит перед вами сегодня? ";
$timeQue = "Сколько времени займет эта задача? ";

$name = readline("Как вас зовут? ");
echo "Приветствую, $name" . "! Запланируйте список задач на день.\n";

$task1 = readline($taskQue);
$time1 = (int)readline($timeQue);

$task2 = readline($taskQue);
$time2 = (int)readline($timeQue);

$task3 = readline($taskQue);
$time3 = (int)readline($timeQue);

$timeall = $time1 + $time2 + $time3;

echo "{$name}, вы запланировали 3 приоритетных задачи на день:
- {$task1} ({$time1}ч)
- {$task2} ({$time2}ч)
- {$task3} ({$time3}ч)
Примерное время выполнения - {$timeall}ч";
