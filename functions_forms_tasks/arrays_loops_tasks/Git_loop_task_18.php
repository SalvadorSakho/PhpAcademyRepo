<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */


//<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
//выходные дни следует вывести жирным.</p>//

$arr = array(1 => "Понедельник", 2 => "Вторник", 3 => "Среда", 4 => "Четверг", 5 => "Пятница", 6 => "Суббота", 7 => "Воскресение");

foreach ($arr as $val => $elem) {

    if ($val == 6 || $val == 7) {

        echo "<u>" . "<b>" . $elem . "</b>" . "</u>";
        echo "<pre>";
    } else {
        echo $elem;
        echo "<pre>";
    }
}
?>

