<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
//<p>7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
// Все добавленные комментарии выводятся над текстовым полем.</p>
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
    $commentFile=fopen('comments.txt','a');
    fputs($commentFile,date("F j, Y, g:i a"). " - ".$_POST['textAreaName'].PHP_EOL);
    fclose($commentFile);

    $commentFile= fopen('comments.txt',"r");

    $string = fread($commentFile,filesize('comments.txt'));

    $chunks = spliti (PHP_EOL, $string);

    for($i=count($chunks)-1; $i >= count($chunks)-4; $i--){
        echo "<pre>";
        echo ($chunks[$i]);
        echo "<pre>";
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

