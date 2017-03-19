<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
//Написать функцию, которая переворачивает строку.
//Было "abcde", должна выдать "edcba".
//Ввод текста реализовать с помощью формы.</p>


//////////////////////////не ЧЁТКИЕ условия задания!!!! Много вариантов решения:
header("Content-Type: text/html; charset=utf-8");


if (isset($_POST['textAreaName'])) {
    // Вариант 1
    $answer = strrevFunc();

    // Вариант 2
    $answer = myArr();
}


function strrevFunc()
{
    return strrev($_POST['textAreaName']);
}


//Тут вообще можно просто выводить в обратном порядке.
function myArr()
{
    $newArra = array();
    for ($i = strlen($_POST['textAreaName'] - 1); $i >= 0; $i--) {
        array_push($newArra, $_POST['textAreaName'][$i]);
    }
    return implode($newArra);
}

?>


<!DOCType="html">
<html>
<head></head>
<body>
<div>
    <p>Comments:</p>
</div>
<div>
</div>
<div>
    <div>
        <?= $answer ?>
    </div>
    <form method="post">
        <textarea name="textAreaName"></textarea>
        <br>
        <br>
        <input type="submit">
    </form>
</div>
</body>
</html>

