<?php


// $name = readline("Как вас зовут? \n");
// $age = readline("Сколько вам лет? \n");
// print "Вас зовут " . $name . ", вам " . $age . " лет \n";


$name = readline("Как вас зовут? \n");
print "Приветствую, $name" . ". Запланируйте на сегодня 3 важных задачи.\n";

$task1 = readline("Какая задача стоит перед вами сегодня? \n");
$time1 = readline("Сколько времени займет эта задача? (время в часах) \n");
$task2 = readline("Какая задача стоит перед вами сегодня? \n");
$time2 = readline("Сколько времени займет эта задача? (время в часах) \n");
$task3 = readline("Какая задача стоит перед вами сегодня? \n");
$time3 = readline("Сколько времени займет эта задача? (время в часах) \n");
$timeall = $time1 + $time2 + $time3 . "ч";

print "$name," . "вы запланировали 3 приоритетных задачи на день:\n -$task1 ($time1)\n -$task2 ($time2)\n -$task3 ($time3)\nПримерное время выполнения - $timeall ";
