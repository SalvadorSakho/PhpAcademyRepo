<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

/*<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'.
 С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'.</p>*/

$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');

foreach ($arr as $key => $elem) {
    echo "<pre>";
    echo $key . " — зарплата" . $elem . " долларов";
    echo "<pre>";
}
?>