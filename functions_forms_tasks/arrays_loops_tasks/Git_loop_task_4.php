<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

/*<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');*/

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

foreach ($arr as $key => $elem) {
    echo "<pre>";
    echo $key;
    echo "<pre>";
}

foreach ($arr as $key => $elem) {
    echo "<pre>";
    echo $elem;
    echo "<pre>";
}

?>