<?php

$wishes = ['счастья', 'здоровья', 'благополучия', 'воображения', 'терпения'];
$epithets = ['бесконечного', 'постоянного', 'невероятного', 'отличного', 'космического'];
$random_congratulation = [];

$name = readline("Назовите ваше имя. ");

$name = ucfirst($name); //сделаем имя с заглавной буквы
$number = 3;

for ($i = 0; $i < $number; $i++) {
    //3 раза генерируются случайные пары слов
    //в задании чтобы пары не повторялись
    $randWishes = array_rand($wishes, $number);
    $randEpithets = array_rand($epithets, $number);

    //сохраняем пары в массиве в виде строки с пробелом, для последнего добавляем "И"
    $random_congratulation[] = $epithets[$randEpithets] . ' ' . $wishes[$randWishes];

    // unset($wishes[$randWishes]);
    // unset($epithets[$randEpithets]);
}
