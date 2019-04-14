<?php

//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'yarhovor'; //имя пользователя, по умолчанию это root
$password = 'yarhovor'; //пароль, по умолчанию пустой
$db_name = 'homework12'; //имя базы данных

$link = mysqli_connect($host,$user,$password,$db_name);

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

//ВЫБРАТЬ все_столбцы ИЗ workers ГДЕ ад_ди_больше_нуля (т.е. все)
$query = "SELECT * FROM workers WHERE id > 0";

//Делаем запрос к БД, результат запроса пишем в $result:
$result = mysqli_query($link, $query) or die( mysqli_error($link) );

//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

//Массив результата лежит в $data, выведем его на экран:
var_dump($data);

echo "ЗАДАЧИ ДЛЯ РЕШЕНИЯ" . '<br>';
echo "Ha SELECT" . '<br><br>';


echo "1. Выбрать работника с id = 3" . '<br>';
$query = "SELECT * FROM workers WHERE id=3";
//
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//
var_dump($data);

echo "2.  Выбрать работников с зарплатой 1000$" . '<br>';
$query = "SELECT * FROM workers WHERE salary=1000";
//
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//
var_dump($data);

echo "3. Выбрать работников в возрасте 23 года" . '<br>';
$query = "SELECT * FROM workers WHERE age=23";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "4. Выбрать работников с зарплатой более 400$." . '<br>';
$query = "SELECT * FROM workers WHERE salary>400";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "5. Выбрать работников с зарплатой равной или большей 500$." . '<br>';
$query = "SELECT * FROM workers WHERE salary>=500";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "6. Выбрать работников с зарплатой НЕ равной 500$." . '<br>';
$query = "SELECT * FROM workers WHERE salary != 500";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "7. Выбрать работников с зарплатой равной или меньшей 900$." . '<br>';
$query = "SELECT * FROM workers WHERE salary<=900";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "8. Узнайте зарплату и возраст Васи" . '<br>';
$query = "SELECT * FROM workers WHERE name='Вася'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "Ha OR i AND" . '<br><br>';

echo "9. Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно)." . '<br>';
$query = "SELECT * FROM workers WHERE age>25 AND age<=28";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "10. Выбрать работника Петю." . '<br>';
$query = "SELECT * FROM workers WHERE name='Петя'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "11. Выбрать работников Петю и Васю." . '<br>';
$query = "SELECT * FROM workers WHERE name='Петя' OR name='Вася'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "12. Выбрать всех, кроме работника Петя" . '<br>';
$query = "SELECT * FROM workers WHERE name != 'Петя'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "13. Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$" . '<br>';
$query = "SELECT * FROM workers WHERE age=27 OR salary=1000";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "14. Выбрать всех работников в возрасте от 23 лет (включительно) 
        до 27 лет (не включительно) или с зарплатой 1000$" . '<br>';
$query = "SELECT * FROM workers WHERE (age>=23 AND age=27) OR salary=1000";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "15. Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$" . '<br>';
$query = "SELECT * FROM workers WHERE (age>23 AND age<27) OR (salary>400 AND salary<1000)";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "16. Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$." . '<br>';
$query = "SELECT * FROM workers WHERE age=27 OR salary != 400";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "Ha INSERT" . '<br><br>';
//
echo "17. Добавьте нового работника Никиту, 26 лет, зарплата 300$. Воспользуйтесь первым синтаксисом" . '<br>';
//$query = "INSERT INTO workers SET name='Никита', age=26, salary=300";
//$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//var_dump($data);
//
echo "18. Добавьте нового работника Светлану с зарплатой 1200$. Воспользуйтесь вторым синтаксисом." . '<br>';
//$query = "INSERT INTO workers (name,age,salary) VALUES ('Светлана',20,1200)";
//$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//var_dump($data);
//
echo "19. Добавьте двух новых работников одним запросом: 
//    Ярослава с зарплатой 1200$ и возрастом 30, 
//    Петра с зарплатой 1000$ и возрастом 31. " . '<br>';
//$query = "INSERT INTO workers (name,age,salary)
//          VALUES ('Ярослав',30,1200), ('Петро',31,1000)";
//$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//var_dump($data);

//
echo "Ha DELETE" . '<br><br>';
//
echo "20. Удалите работника с id=7." . '<br>';
//$query = "DELETE * FROM workers WHERE id=7";
//$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//var_dump($data);
//
echo "21. Удалите Колю." . '<br>';
//$query = "DELETE * FROM workers WHERE name='Коля'";
//$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//var_dump($data);
//
echo "22. Удалите всех работников, у которых возраст 23 года." . '<br>';
//$query = "DELETE * FROM workers WHERE age=23";
//$result = mysqli_query($link, $query) or die( mysqli_error($link) );
//for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
//var_dump($data);

echo "Ha UPDATE" . '<br><br>';

echo "23. Поставьте Васе зарплату в 200$." . '<br>';
$query = "UPDATE workers SET salary=300 WHERE name='Вася'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "24. Работнику с id=4 поставьте возраст 35 лет" . '<br>';
$query = "UPDATE workers SET age=25 WHERE id=4";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "25  Всем, у кого зарплата 500$ сделайте ее 700$." . '<br>';
$query = "UPDATE workers SET salary=700 WHERE salary=500";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "26. Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23." . '<br>';
$query = "UPDATE workers SET age=23 (WHERE id>2 AND id<=5)";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);

echo "27. Поменяйте Васю на Женю и прибавьте ему зарплату до 900$" . '<br>';
$query = "UPDATE workers SET name='Женя', salary= 900 WHERE name='Вася'";
$result = mysqli_query($link, $query) or die( mysqli_error($link) );
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
var_dump($data);