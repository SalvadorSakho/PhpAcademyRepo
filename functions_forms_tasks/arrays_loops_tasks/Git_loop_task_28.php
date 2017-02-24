<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */


//<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>

echo "<table border='3px' width='500px' height='500px'>";
for ($i = 0; $i <= 10; $i++) {

    echo "<tr>";
    echo "<td style='text-align: center; background: darkgrey'>" . $i . "</td>";
    for ($y = 1; $y <= 10; $y++) {

        if ($i > 0) {
            echo "<td style='text-align: center'>" . $i * $y . "</td>";
        } else {
            echo "<td style='text-align: center; background: darkgrey'>" . $y . "</td>";
        }
    }
    echo "<pre>";
}
echo "</table>";
?>

