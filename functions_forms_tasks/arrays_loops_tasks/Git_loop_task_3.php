<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

/*<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15.
С помощью цикла foreach найдите сумму квадратов элементов этого массива.
Результат запишите переменную $result.</p>;*/

$myArray = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($myArray as $elem) {

    $elem*=$elem;
    $result += $elem;
}
echo $result;

?>