<!--  6
6. Спросите у пользователя email с помощью формы.
Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email)
при ее открытии поле email было автоматически заполнено.
-->

<p>Вкажіть свій e-mail</p>
<form action="ex6_test.php" method="get">
    <input type="text"
           name="email">
    <input type="submit">
</form>

<?php
//
if(!empty($_REQUEST['email'])){
    session_start();
    $_SESSION['email'] = $_REQUEST['email'];
}
?>