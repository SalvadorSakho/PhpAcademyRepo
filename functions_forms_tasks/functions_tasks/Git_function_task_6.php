<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.02.2017
 * Time: 13:49
 */
//<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
// Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>

?>

<!DOCTYPE="html">
<html>
<head></head>

<body>

<form method="post" enctype="multipart/form-data">
    <input name="photo[]" type="file" multiple="multiple">
    <br>
    <br>
    <input type="submit">
</form>


<div>
    <?php
    error_reporting(E_ALL);

    for ($i = 0; $i < count($_FILES['photo']["tmp_name"]); $i++){
        $uploadfile = "gallery/".$_FILES['photo']['name'][$i];
        move_uploaded_file($_FILES['photo']["tmp_name"][$i], $uploadfile);
    }
    $dir = "gallery";
    $files = scandir($dir);

    echo "<table border='3px'>";

    for ($j=0;$j<count($files);$j++){
        if ($files[$j]!="." && $files[$j]!=".."){
            echo "<tr><td>";
            $path=$files[$j];
            echo "<img src=/gallery/$path alt='' width='100'/>";
            echo "</td></tr>";
        }
    }
    echo "</table>";
    ?>
</div>

</body>
</html>





