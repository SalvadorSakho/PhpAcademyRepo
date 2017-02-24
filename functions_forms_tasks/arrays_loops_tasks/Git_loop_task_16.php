<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

//<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
//выведите на экран столбец элементов массива, как показано на картинке.
//1, 2, 3
//4, 5, 6
//7, 8, 9</p>

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 0;
foreach ($arr as $val =>$elem) {

    echo $elem;
    $count++;
    if ($count == 3) {
        echo "<pre>";
        $count=0;
    }

}
?>

