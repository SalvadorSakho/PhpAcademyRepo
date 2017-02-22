<!--Создать форму, которая содержит поля name, email, phone.
 Задать скрипт, который выведет на экран отправленные данные -
 $_POST или $_GET (в зависимости от свойств формы)-->


<!Doctype=html>

<html>
<head></head>
<body>
<form id="formId" method="post">
    <input name="name" type="text" placeholder="ФИО"/>
    <br>
    <input name="email" type="email" placeholder="Email"/>
    <br>
    <input name="onoheID" type="text" placeholder="Phone number"/>
    <br>
    <input name="submBtn" type="submit">
</form>

<?php if ($_POST) : ?>
    <h1>Form data:</h1>
    <?php print_r($_POST) ?>
<?php endif ?>


</body>
</html>

