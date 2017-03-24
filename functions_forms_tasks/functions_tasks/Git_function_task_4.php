<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
//<p>4. Написать функцию, которая выводит список файлов в заданной директории.
// Директория задается как параметр функции.</p>


error_reporting(E_ALL);

function filesInDir($filePath)
{
    echo "<pre>";
    var_dump(scandir(iconv("UTF-8", "cp1251", $filePath)));
    echo "<pre>";
}

?>

<!DOCTYPE="html">
<html>
<head></head>

<body>
<form method="get">
    <br>
    <input name="textUrl" type="text">
    <br>
    <br>
    <input type="submit">
</form>

<div>
    <?php
    if (isset($_GET["textUrl"])) {
        filesInDir($_GET["textUrl"]);
    }
    ?>
</div>
</body>
</html>



