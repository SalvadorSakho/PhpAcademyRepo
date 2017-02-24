<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
//<p>3. Есть текстовый файл.
// Необходимо удалить из него все слова, длина которых превыщает N символов.
// Значение N задавать через форму.
// Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

error_reporting(E_ALL);


function top3LongWords($lengthForDel, $filePath)
{
//"C:\\xampp\\htdocs\\textFile_Functions_task_3"
    $myFirstArr = explode(" ", file_get_contents($filePath));

    foreach ($myFirstArr as $item => $val) {
        if (mb_strlen($myFirstArr[$item], 'utf-8') > $lengthForDel) {
            unset($myFirstArr[$item]);
        }
    }

    echo "<pre>";
    var_dump($myFirstArr);
    echo "<pre>";
}

?>

<!DOCTYPE="html">
<html>
<head></head>

<body>
<form method="get">
    <input name="wordLength" type="text">
    <br>
    <br>
    <input name="textUrl" type="text">
    <br>
    <br>
    <input type="submit">
</form>

<div>
    <?php
    if (isset($_GET["wordLength"]) && isset($_GET["textUrl"])) {
        top3LongWords($_GET["wordLength"], $_GET["textUrl"]);
    }
    ?>
</div>
</body>
</html>



