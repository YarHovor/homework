<!--  2

4. Сделайте две страницы: index.php и test.php.
При заходе на index.php спросите с помощью формы страну пользователя, запишите ее в сессию
(форма при этом должна отправится на эту же страницу).
Пусть затем пользователь зайдет на страницу test.php - выведите там страну пользователя.


-->

<?php

session_start();

if(!empty($_SESSION['country'])){
    echo $_SESSION['country'];//
}
?>