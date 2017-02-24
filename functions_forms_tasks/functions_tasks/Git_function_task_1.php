<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
/*<p>1. Создать форму с двумя элементами textarea.
При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>*/
error_reporting(E_ALL);


function getCommonWords($a, $b)
{
    $myFirstArr = explode(" ", $a);

    $mySeccondArr = explode(" ", $b);

    $finalMass = null;

    for ($i = 0; $i < count($myFirstArr); $i++) {
        if (in_array($myFirstArr[$i], $mySeccondArr)) {
            $finalMass[] = $myFirstArr[$i];
        }
    }

    var_dump($finalMass);
}


?>


<!DOCTYPE = "html" >
<html>
<head></head>
<body>

<form method="get" action="Git_function_task_1.php">
    <div><input name="t1" type="text" value=" "/></div>
    <br>
    <div><input name="t2" type="text" value=" "/></div>
    <br>
    <div><input type="submit" value="Отправь меня =)"></div>
</form>


<?php
if (isset($_GET ["t1"]) || isset($_GET ["t2"])) {
    echo getCommonWords($_GET["t1"], $_GET["t2"]);
} ?>
</body>
</html>