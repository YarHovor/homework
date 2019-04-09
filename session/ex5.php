<?php
/*
5. Запишите в сессию время захода пользователя на сайт.
При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
 */

session_start();

if (!empty($_SESSION['last_visit']))
{
    echo 'Ви були тут '.(time()-$_SESSION['last_visit']).' секунд назад';
    $_SESSION['last_visit'] = time();

} else {
    $_SESSION['last_visit'] = time();
    echo "Ви тут ще не були";
}
?>
