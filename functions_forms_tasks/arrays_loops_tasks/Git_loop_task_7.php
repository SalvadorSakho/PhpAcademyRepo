<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

/*<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4.
С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>*/

$arr = array(2, 5, 9, 15, 0, 4);

foreach ($arr as $elem) {

    if ($elem > 3 && $elem < 10) {
        echo "<pre>";
        echo $elem;
        echo "<pre>";
    }
}

?>