<?php
/*
4. Спросите дату рождения пользователя.
При следующем заходе на сайт напишите сколько дней осталось до его дня рождения.
Если сегодня день рождения пользователя - поздравьте его!
 */
//
// НЕ ПОЛУЧИЛОСЬ
//
if(!empty($_REQUEST['day'])){
    $dayB = mktime(0,0,0, $_REQUEST['month'], $_REQUEST['day'], $_REQUEST['year']);
    //mktime — Возвращает метку времени Unix для заданной даты
    setcookie('birthday', $dayB);

}
?>
<!DOCTYPE html>
<html>
<?php if(empty($_COOKIE['birthday'])){?>
    <p>Коли у Вас День Народження?</p>
    <form action="" method="get">
        <p>Введіть день</p>
        <input type="text" name="day"><br>
        <p>Введіть місяць</p>
        <input type="text" name="month"><br>
        <p>Введіть рік</p>
        <input type="text" name="year"><br>
        <input type="submit" value="ok" name="ok">
    </form>
<?php }

else{
    if(floor(($_COOKIE['birthday']-time())/(3600*24))==0) {
        echo "Вітаємо з Днем народження!!!";
    }
    else {
        "До дня народження залишилось ".floor(($_COOKIE['birthday'] - time())/(3600*24))." днів";
    }
}?>
</body>
</html>
