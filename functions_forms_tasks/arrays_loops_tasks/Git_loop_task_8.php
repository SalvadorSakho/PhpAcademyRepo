<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

/*<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.
Циклы while и for</p>*/

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9.);

foreach ($arr as $elem) {
    echo "-" . $elem;
}

echo "<pre>";

$i = 0;
while ($i < count($arr)) {
    echo "-" . $arr[$i];
    $i++;
}

echo "<pre>";

for ($z = 0; $z < count($arr); $z++) {
    echo "-" . $arr[$z];
}

?>