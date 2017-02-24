<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

//<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
//проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
//выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>//

$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = array(2, 3, 4);
$exists = array();

foreach ($arr as $val => $elem) {

    for ($i = 0; $i < count($e); $i++) {
        echo "<pre>";
        if ($elem == $e[$i]) {
            echo "Есть $e[$i]";
            echo "<pre>";
            break;
        }
    }
}
?>

