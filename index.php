<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $elem){
    $result = $result + ($elem*$elem);
}
echo "<strong>Задание 1.</strong><br> Сумма квадратов элементов масива 1,2,3,4,5 равно: " . $result . '<br>';
////////////////////////////////////////////////////////////////////
echo "<br><strong>Задание 2.</strong><br>";
$arr = [
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400
];
foreach ($arr as $key=>$elem){
    echo $key. '- зарплата' . $elem . ' долларов';
}
//////////////////////////////////////////////////////////////////
echo "<br><br><strong>Задание 3.</strong><br>";
$week = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
];
$day= 4;
foreach ($week as $key=>$item) {
    if($key == $day){
        echo '<i><strong>'.$item.'</strong><i><br>';
    }
    else {
        echo $item.'<br>';
    }
}
////////////////////////////////////////////////////////////////////
echo "<br><strong>Задание 4.</strong><br>";
$arr = [
    'green'=> 'зеленый',
    'red'=> 'красный',
    'blue'=> 'голубой'
];
$en = [];
$ru = [];

foreach ($arr as $key=>$color){
    $en[]=$key;
    $ru[]=$color;
}
var_dump($en);
var_dump($ru);
print_r($en);
echo "<br>";
print_r($ru);
?>
