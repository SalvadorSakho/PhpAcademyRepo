<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

/*<p>6.
Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');</p>*/

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
$en = null;
$ru = null;
foreach ($arr as $key => $elem) {
    echo "<pre>";
    $en[] = array($key);
    $ru[] = array($elem);
    echo "<pre>";
}
var_dump($en);
var_dump($ru);
?>