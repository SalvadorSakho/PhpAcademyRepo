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


function getCommonWords()
{
    echo "Hello";
}

?>


<!DOCTYPE="html">
<html>
<head></head>
<body>

<form method="post" action="Git_function_task_1.php">
    <div><textarea name="t1" type="text"></textarea></div>
    <br>
    <div><textarea name="t2" type="text"></textarea></div>
    <br>
    <div><input type="submit" name="submit" value="Отправь меня =)"</div>
</form>

<?php
if (isset($_POST['submit'])) {
    getCommonWords();
}
?>
</body>
</html>
