<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
//<p>2. Создать форму с элементом textarea.
// При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
// Реализовать с помощью функции.</p>

error_reporting(E_ALL);


function top3LongWords($a)
{
    $myFirstArr = explode(" ", $a);

    /*echo "<pre>";
      var_dump($myFirstArr);
      echo "<pre>";*/

    for ($i = 0; $i < count($myFirstArr) - 1; $i++) {
        $maxLett = $i;

        for ($j = $i + 1; $j < count($myFirstArr); $j++) {
            if (strlen($myFirstArr[$j]) > strlen($myFirstArr[$maxLett])) {
                $maxLett = $j;
            }
        }
        $tmp = $myFirstArr[$i];
        $myFirstArr[$i] = $myFirstArr[$maxLett];
        $myFirstArr[$maxLett] = $tmp;
    }
    //var_dump($myFirstArr);
    echo "ТОП 3 самых длинные слов = ";
    for ($y = 0; $y < 3; $y++) {
        echo $myFirstArr[$y] . " ";
    }

}

?>


<!DOCTYPE = "html" >
<html xmlns="http://www.w3.org/1999/html">
<head></head>
<body>

<form method="get">
    <div><textarea name="t1" width="200px"> </textarea></div>
    <br>
    <div><input type="submit" value="Отправь меня =)"></div>
</form>

<div>
    <?php
    if (isset($_GET ["t1"])) {
        echo top3LongWords($_GET["t1"]);
    } ?>
</div>
</body>
</html>