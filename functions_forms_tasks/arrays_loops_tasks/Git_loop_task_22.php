<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */


//<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
//xx<br>
//xxxx<br>
//xxxxxx<br>
//xxxxxxxx<br>
//xxxxxxxxxx</p>


for ($i = 0; $i <= 5; $i++) {
    for ($j = $i + $i*2; $j > $i; $j--) {
        echo "x";
    }
    echo("<pre>");
}
?>

