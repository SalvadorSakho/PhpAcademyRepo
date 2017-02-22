<!--Создать форму, которая содержит поля name, email, phone.
 Задать скрипт, который выведет на экран отправленные данные -
 $_POST или $_GET (в зависимости от свойств формы)-->

<form action="Task28.php" method="post">
    <input name="username" type="text" placeholder="ФИО"/>
    <br>
    <input name="useremail" type="email" placeholder="Email"/>
    <br>
    <input name="userphonoheID" type="text" placeholder="Phone number"/>
    <br>
    <input name="submitBtn" type="submit">
</form>

<?php
echo var_dump("Form variables");
echo var_dump($_POST);
?>