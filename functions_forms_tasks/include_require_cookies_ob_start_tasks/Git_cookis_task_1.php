<?php
include_once "Git_cookis_task_1_1.php";
$text=$_COOKIE['text'];
$count=$_COOKIE['count'];
?>
<!DOCTYPE html>
<html>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>cookis task 1</title>
    <body>
        <form method="post" name="formName" action='Git_cookis_task_1_1.php'>
            <input type="text" name="inputName"/>
            <input type="submit" value="Submit"/>
        </form>
        <div name="count">Количество отправленных форм: <?=$count?></div>
        <div name="text">Текст в форме: <?=$text?></div>
    </body>
</html>