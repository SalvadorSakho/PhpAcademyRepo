<?php
include_once "Git_cookis_task_1.php";

    if(strlen($_POST["inputName"])>0){
        
        
     
        
        $text = $_POST["inputName"];
        $count = isset($_COOKIE['count']) ? (int)$_COOKIE['count'] : 0;
         ++$count;
          if ($count>3){
            $text="headers already sent";
            setcookie('text', $text, time() + 60);
            header('Location: /Git_Tasks/Cookis/Git_cookis_task_1.php');
            return;
         }
      
        
      
        
        setcookie('count', $count, time() + 60);
        setcookie('text', $text, time() + 60);
        header('Location: /Git_Tasks/Cookis/Git_cookis_task_1.php');
}

?>