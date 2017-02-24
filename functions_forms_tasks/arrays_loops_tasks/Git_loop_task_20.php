<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */


//<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
//рядов, а не 5.<br><br>
//x<br>
//xx<br>
//xxx<br>
//xxxx<br>
//xxxxx</p>


for ($i = 0; $i <= 20; $i++) {
    for ($j = $i + $i; $j > $i; $j--) {
        echo "x";
    }
    echo("<pre>");
}
?>

