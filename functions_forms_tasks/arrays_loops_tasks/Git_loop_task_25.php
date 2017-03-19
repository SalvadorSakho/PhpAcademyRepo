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
print_r($myArr);
echo "<pre>";
echo $maxValue = max($myArr);
echo "<pre>";
echo $minValue = min($myArr);
echo "<pre>";

foreach ($myArr as $values => $items) {

    if ($items == $maxValue) {
        $myArr[$values] = $minValue;
    } else if ($items == $minValue) {
        $myArr[$values] = $maxValue;
    }

}

print_r($myArr);
?>

