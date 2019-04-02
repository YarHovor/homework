<?php
/**
 */

class Worker // Сделал класс Worker
{
    public $name, $age, $salary; // объявил поля public
}

$worker = new Worker; // объект - представитель класса Worker (перший об'єкт класу)
$worker->name = 'Ivan'; // об'єкт класа воркер, і установлює полю нейм значення
$worker->age = 25; // ---
$worker->salary = 1000; // ---

$worker2 = new Worker; // об'єкт - теж представник класа Воркер (другий об'єкт класу)
$worker2->name = 'Vasiliy';// шо і в перешому об'єкті, але тепер об'єкт воркер2
$worker2->age = 26; //
$worker2->salary = 2000; //

echo "Завдання 1 <br>";
echo "Сума зарплат Івана та Васі: " . ($worker->salary + $worker2->salary) . "<br>";//
echo "Сума віку Івана та Васі: " . ($worker->age+$worker2->age);//
