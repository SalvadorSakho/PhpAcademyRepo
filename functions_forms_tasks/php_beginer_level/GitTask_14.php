<?php
//<p>14. Задана переменная $foo = 'bar';
// Создать переменную bar, в которой будет храниться число 10.
// Вывести число 10, используя только переменную $foo (не опечатка).</p>


$hello = "Hello";
$$hello = $hello;
$$$hello = $$hello;
$$$$hello = $$$hello;
$$$$$hello = $$$$hello;
$$$$$$hello = $$$$$hello;

echo $$$$$$hello . " =\$\$\$\$\$\$hello";
echo "<pre>";

$bar = 10;
$foo = 'bar';

echo $$foo . "  =\$\$foo";
?>