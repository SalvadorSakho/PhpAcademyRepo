<?php

$text = "Какой то текст";

$optionArr=array('none'=>'<option selected disabled>Выберите цвет</option>'
                ,'красный'=>'<option>красный</option>'
                ,'синий'=>  '<option>синий</option>'
                ,'желтый'=> '<option>желтый</option>');
                
                 
$arr= array('красный'=>'<span style="color:red;">Lorem Ipsum</span>'
            , 'синий'=>'<span style="color:blue;">Lorem Ipsum</span>'
            ,'желтый'=>'<span style="color:yellow;">Lorem Ipsum</span>');

foreach($arr as $val=> $item){
    
    if($_COOKIE['color']==$val){
        $text=$item;
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>cookis task 2</title>
    </head>
    <body>
        <div>
            <div>
            <form  method="post" name="collorForm" action='Git_cookis_task_2_1.php'>
                <select  name="collorChoise">
                    <?php 
                        foreach($optionArr as $val1 => $item1){
                         if($_COOKIE['color']==$val1){   
                            $item1 = '<option selected>'.$val1.'</option>';
                            echo $item1;
                        } else { 
                            echo $item1;
                        }
                    }
                    ?>
                </select>
                <br>
                <br>
                <input type="submit" name="collorSub"/>
            </form>
            </div>
            <div>
                Текст: <?=$text?>
            </div>
        </div>
    </body>
</html>