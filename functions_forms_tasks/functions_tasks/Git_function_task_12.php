<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */


//<p>12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
//Пример:<br><br>
//Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь.
//А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
//Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался
//А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'

header("Content-Type: text/html; charset=utf-8");


if (isset($_POST['textAreaName'])){
    $answer=reverseFunc($_POST['textAreaName']);
}

function reverseFunc($string){
    mb_internal_encoding("UTF-8");
    $text=split("\.",$string);
    $newString="";
    for ($i=count($text)-1;$i>=0;$i--){
        $newString = $newString." ".$text[$i].".";
    }
    return $newString;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<div>
    <p>Comments:</p>
</div>
<div>
</div>
<div>
    <div>
        <?=$answer?>
    </div>
    <form method="post">
        <textarea name="textAreaName"></textarea>
        <br>
        <br>
        <input type="submit" >
    </form>
</div>
</body>
</html>
