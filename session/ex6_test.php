<!--  6

6. Спросите у пользователя email с помощью формы.
Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email)
при ее открытии поле email было автоматически заполнено.


-->

<?php

session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email']: ''; //isset - определяет, біла ли установлена переменная значением, отличнім от НУЛЛ
?>

<form action="" method="get">
<input type="text" name="name"><br>
<input type="text" name="surname"><br>
<input type="password" name="password"><br>
<input type="text" name="email" value = "<?= !empty($_REQUEST['email']) ? $_REQUEST['email'] : '' ?>">
</form>