<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08.02.2017
 * Time: 13:54
 */

$book1 = array("Style" => "Novel", "Author" => "Джудит Макнот", "BookName" => "Битва желаний", "Price" => 1000);
$book2 = array("Style" => "Novel", "Author" => "Джудит Макнот", "BookName" => "Королевство Грёз", "Price" => 1000);
$book3 = array("Style" => "Novel", "Author" => "Майкл Каннингем", "BookName" => "Дом на краю неба", "Price" => 1000);
$bookArray = array($book1, $book2, $book3);

for ($i = 0; $i < count($bookArray); $i++){
    echo "<pre>";
    print_r($bookArray[$i]);
    echo "<pre>";
}
?>