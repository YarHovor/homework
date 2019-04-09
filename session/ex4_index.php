<!--  2

4. Сделайте две страницы: index.php и test.php.
При заходе на index.php спросите с помощью формы страну пользователя, запишите ее в сессию
(форма при этом должна отправится на эту же страницу).
Пусть затем пользователь зайдет на страницу test.php - выведите там страну пользователя.

-->

<p>Вкажи країну</p>
<form action="ex4_index.php" method="get">
    <input type="text"
           name="country">
    <input type="submit">
</form>

<?php
//
if(!empty($_REQUEST['country'])){
    session_start();
    $_SESSION['country'] = $_REQUEST['country'];
}
?>