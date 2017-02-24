<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */


//<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
//какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
//442158755745 встречается 4 раза.</p>//

$numb = 442158755745;
$myArr = str_split($numb);
$myChoice = 7;
$numb = 0;


for ($i = 0; $i < count($myArr); $i++) {

    if (!is_null($myChoice)) {
        if ($myArr[$i] == $myChoice) {
            $numb++;
        }
    } else {
        echo "Укажите число";
        return;
    }
}
echo "<pre>";
echo $numb;
?>

