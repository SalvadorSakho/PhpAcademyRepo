<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */

//<p>10. Написать функцию, которая считает количество уникальных слов в тексте.
//Слова разделяются пробелами.
//Текст должен вводиться с формы.</p>
header("Content-Type: text/html; charset=utf-8");

//не ЧЁТКИЕ условия задания!!!! Много вариантов:
if (isset($_POST['textAreaName'])){
    // Вариант 1
    // $answer=array_uniqueFunk();
    // Вариант 2
    $answer=myUniqueFunc();
}

function array_uniqueFunk(){
    return count(array_unique(split(" ",$_POST['textAreaName'])));
}

function myUniqueFunc(){
    $newArra=split(" ",$_POST['textAreaName']);

    $word =null;
    $word;
    echo "<pre>";
    var_dump($newArra);
    echo "<pre>";

    foreach($newArra as $val=>$it){
        $word=$it;
        $quan=0;
        foreach($newArra as $values => $item){

            if ($item==$word){
                ++$quan;
                if ($quan>1){
                    unset($newArra[$values]);
                    $newArra = array_values($newArra);
                }
            }
        }
    }

    echo "<pre>";
    var_dump($newArra);
    echo "<pre>";

    return count($newArra);
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
