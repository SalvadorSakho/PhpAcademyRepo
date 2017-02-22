<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.02.2017
 * Time: 23:43
 */

/*<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>*/
$myArray= array('html', 'css', 'php', 'js', 'jq');

foreach ($myArray as $elem){
   echo "<pre>";
    print_r($elem);

}

?>