<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

//<p>13. Вывести таблицу умножения</p>

for ($i = 0; $i <= 10; $i++) {

    echo $i;

    for ($y = 1; $y <= 10; $y++) {

        if ($i > 0) {
            echo "--" . $i * $y;

        } else {
            echo "--" . $y;
        }

    }
    echo "<pre>";
}

?>