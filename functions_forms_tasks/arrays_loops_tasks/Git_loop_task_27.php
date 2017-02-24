<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */


//<p>27. Создать генератор случайных таблиц.
// Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
// Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
// Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
//   в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
// В каждой ячейке должно находиться случайное число. <br><br>

$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

$row = 8;
$cols = 2;

echo "<table border='3px' height='500px' width='500px'>";
for ($i = 0; $i < $row; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) {
        echo "<td style='background:" . $colors[rand(0, 6)] . ";'>";
    }
}
echo "</table>";
?>

