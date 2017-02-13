<!--Простое число-->
<form method="post">
    <input name="name2" type="number"/>
    <input type="submit">
</form>


<?php
if ($_POST) {
    $number = (int)$_POST['name2'];
    $result = true;

    if ($number == 2) {
        $result = true;
    } else {
        for ($i = 2; $i < $number; $i++) {

            if ($number % $i == 0) {
                $result = false;
                break;
            }
        }
    }

    echo "Result: " . ($result ? "" : "not") . "prime";
} ?>