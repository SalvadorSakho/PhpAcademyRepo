<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

//<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
// С помощью цикла foreach найдите сумму элементов этого массива.
// Запишите ее в переменную $result.</p>
$myArray = array(1, 20, 15, 17, 24, 35);

$result = 0;
foreach ($myArray as $elem) {

    $result += $elem;
}
echo $result;

?>