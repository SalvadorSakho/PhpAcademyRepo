<?php
$someMen1 = array('name' => "Salva", 'seccondNAme' => "sda", 'age' => 61, 75.35);/*Ассоциативный массив*/
$someMen2 = array('name' => "Calva", 'seccondNAme' => "sda", 'age' => 55, 75.35);
$someMen3 = array('name' => "Ralva", 'seccondNAme' => "sasdda", 'age' => 18, 7345.35);
$someMen4 = array('name' => "Malva", 'seccondNAme' => "sasdasdsada", 'age' => 17, 7345.35);
$someMen = array($someMen1, $someMen2, $someMen3, $someMen4); /*=> - называем елементы массива любыми именами*/

//$varq=var_dump($someMen [123]);

for ($p = 0; $p < count($someMen); $p++) {
    echo $someMen[$p]['name'];
    echo '<pre>';/*Перенос строки*/
}

print_r($someMen); ///print recursive

echo '<pre>';/*Перенос строки*/
echo '<pre>';/*Перенос строки*/

/*$someVar = $someMen[123]['age'];
echo $someVar;*/

echo '<pre>';/*Перенос строки*/
echo '<pre>';/*Перенос строки*/

if ($someMen[0]['seccondNAme'] == 'sda') {
    $someMen[0]['seccondNAme'] = 'Sakho';
    echo $someMen[0]['name'];
    echo $someMen[0]['seccondNAme'];
    echo $someVar[0]['age'];
} else {
    echo 'FuckOFF';
}


/* Тернарній оператор */
$a = -234;
$b = 5;
$condition = true;
echo '<pre>';/*Перенос строки*/
$result = $condition ? $a : $b; /*если $condition=fase то $a(-234) иначе $b (5)*/
echo $result;
echo '<pre>';/*Перенос строки*/
echo $condition ? "Да =тернарный оператор" : "Нет =тернарный оператор"; /*если $condition=fase то $a(-234) иначе $b (5)*/

echo '<pre>';/*Перенос строки*/


$t = 0;
while ($condition) {
    if ($t >= 0) {
        $condition = false;
    }
    $t++;
    echo " while", $t;
}

echo '<pre>';/*Перенос строки*/


$i = 1;
do {
    $i++;
    echo " do while ", $i;

} while ($i < 1);

echo '<pre>';/*Перенос строки*/

for ($z = 0; $z < 1; $z++) {
    echo " for ", $z;;
}


echo '<pre>';/*Перенос строки*/


$condition = true;
$v = 10;
while ($condition) {

    if ($v % 2) {
        echo $v++;
        continue;
    } else {
        break;
        echo $v++;
    }
}


echo '<pre>';/*Перенос строки*/
foreach (array(1, 2, 3) as $u) {
    echo $u;
}


echo '<pre>';/*Перенос строки*/
foreach ($someMen as $sm => $key) { /*sm = индекс в массиве*/
    echo $sm;
    print_r($key);
}

die;


?>