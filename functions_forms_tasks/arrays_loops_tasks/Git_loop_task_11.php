<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

//<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>

for ($z = 0; $z <= 100; $z++) {
    if ($z%2==0) {
        echo "<pre>";
        echo $z;
        echo "<pre>";
    }
}
?>