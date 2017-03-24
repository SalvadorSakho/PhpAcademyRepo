<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
//<p>5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
//  Директория и искомое слово задаются как параметры функции.</p>
//
// Добавить возможность выборки по файлов В КОТОРЫХ ЕСТЬ ЕИСКОМОЕ СОЛОВО. Есть файл есть слово, если оно в нем есть то его название выводим


error_reporting(E_ALL);

function filesInDirByWords($words, $filePath)
{
    $dirArr = scandir(iconv("UTF-8", "cp1251", $filePath));
    foreach ($dirArr as $item => $value) {

        if (stristr($value, $words)) {
            echo "<pre>";
            echo $value;
            echo "<pre>";
        }
    }
}

?>

<!DOCTYPE="html">
<html>
<head></head>

<body>
<form method="get">
    <input name="wordsOfDir" type="text">
    <br>
    <br>
    <input name="textUrl" type="text">
    <br>
    <br>
    <input type="submit">
</form>

<div>
    <?php
    if (isset($_GET["wordsOfDir"]) && isset($_GET["textUrl"])) {
        filesInDirByWords($_GET["wordsOfDir"], $_GET["textUrl"]);
    }
    ?>
</div>
</body>
</html>



