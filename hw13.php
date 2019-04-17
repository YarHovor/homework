<?php
//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'yarhovor'; //имя пользователя, по умолчанию это root
$password = 'yarhovor'; //пароль, по умолчанию пустой
$db_name = 'homework13'; //имя базы данных
$link = mysqli_connect($host,$user,$password,$db_name);
//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

echo "Домашнее задание 13" . '<br><br>';


echo "1) Выбрать Id заказа и соответствующих пользователей 
из таблицы users, у которых записи в таблице orders имеют status = 0;" . '<br>';
$query = "
SELECT o.id, u.name, o.status
FROM orders o
JOIN users u ON o.user_id = u.id
WHERE o.status=0
";
//
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//
var_dump($data);

echo '<br><br>';

echo "2) Выбрать пользователей у которых есть невыполненные заказы, status = 0;" . '<br>';
$query = "
SELECT u.name, o.status
FROM orders o
JOIN users u ON o.user_id = u.id
WHERE o.status=0
";
//
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//
var_dump($data);

echo '<br><br>';

echo "3) Выбрать Id, имя, и кол-во заказов всех пользователей из таблицы users, 
у которых 3 и больше записей поля 'status' = '1' в таблице orders" . '<br>';
$query = "
SELECT u.id, u.name, o.user_id, o.status
FROM orders o
JOIN users u ON o.user_id = u.id
WHERE o.status=1
";
//
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//
var_dump($data);