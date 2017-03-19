<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
// <p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
// Все добавленные комментарии выводятся над текстовым полем.
// Реализовать проверку на наличие в тексте запрещенных слов, матов.
// При наличии таких слов - выводить сообщение "Некорректный комментарий".
// Реализовать удаление из комментария всех тегов, кроме тега &lt;&gt;.</p>
?>

<!DOCType="html">
<html>
<head></head>
<body>
<div>
    <p>Comments:</p>
</div>
<div>
    <?php
    header("Content-Type: text/html; charset=utf-8");
    $commentFile=fopen('comments.txt','a');
    if ($_POST['textAreaName']!=''){

        fputs($commentFile,date("F j, Y, g:i a"). " - ".$_POST['textAreaName'].PHP_EOL);

        fclose($commentFile);

        $commentFile= fopen('comments.txt',"r");

        $string = fread($commentFile,filesize('comments.txt'));

        $chunks = spliti (PHP_EOL, $string);

        $badArray=array("бля","сука","уеб","мудак","гнида","гондо","хуй","пида","еба","ебл");

        for($i=count($chunks)-1; $i >= count($chunks)-4; $i--){
            echo "<pre>";

            $text = explode(" ", strip_tags($chunks[$i],'&lt&gt'));

            for ($z=0;$z<count($text);$z++){
                foreach ($badArray as $value => $item) {
                    $pos = strpos(mb_strtolower($text[$z],'UTF-8'), $item);
                    if ($pos!==false){
                        $text[$z]=" [Некорректный комментарий] ";
                    }
                }
                echo $text[$z]." ";
            }
            echo "<pre>";
        }
    }
    ?>
</div>
<div>
    <form method="post">
        <textarea name="textAreaName"></textarea>
        <br>
        <br>
        <input type="submit">
    </form>
</div>
</body>
</html>

