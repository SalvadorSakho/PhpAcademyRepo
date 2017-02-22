<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

//<p>13. Вывести таблицу умножения</p>

for ($i = 1; $i <= 10; $i++) {

    echo $i;
    echo '-';

    for ($y = 0; $y <= 10; $y++) {
        echo $y;
        echo '-';
    }
    echo '<pre>';
}

?>