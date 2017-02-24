<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */


//<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
//найти максимальное и минимальное значение и поменять их местами.</p>

$myArr = array();

for ($i = 0; $i < 10; $i++) {
    $myArr[$i] = rand(1, 10);
}

echo "Начальный массив";
echo "<pre>";
var_dump($myArr);

for ($i = 0; $i < count($myArr) - 1; $i++) {
    $list = $i;

    for ($j = $i + 1; $j < count($myArr); $j++) {
        if ($myArr[$j] > $myArr[$list]) {
            $list = $j;
        }
    }
    $tmp = $myArr[$i];
    $myArr[$i] = $myArr[$list];
    $myArr[$list] = $tmp;
}

echo "Отcортированный массив c поменяными значениями";
echo "<pre>";
var_dump($myArr);

/*$tm1 = $myArr[count($myArr) - 1];
$myArr[count($myArr) - 1] = $myArr[0];
$myArr[0] = $tm1;*/
?>

