<?php

require_once __DIR__.'/App/Farm.php';
require_once __DIR__.'/App/Cow.php';
require_once __DIR__.'/App/Chicken.php';

$farm = new \App\Farm();
echo "Ферма создана\n\n";

$farm->setCows(10);
$farm->setChickens(20);
echo "Добавили 10 коров и 20 кур\n\n";

$cows = $farm->getCows();
$chickens = $farm->getChickens();
echo "Текущее кол-во коров: $cows\n";
echo "Текущее кол-во кур: $chickens\n\n";

$farm->serve();
echo "Собрали продукцию со всех животных\n\n";

echo "Собрано молока: $farm->milk л\n";
echo "Собрано яиц: $farm->eggs шт\n";
