<?php
/**
 */

class Worker4 // Сделал класс Worker
{
    private $name, $salary; // объявил поля priate
    public $age;

    public function __construct($name, $age) // це вбудований метод __***, в нього передаються парметри
    {
        $this->name=$name; // воркер2
        $this->age=$age; //для получення значенб
    }
    //як раніше
    public function getName()
    {
        return $this->name;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$dima = new Worker4 ('Дима', 25); // объект $dima - представитель класса Worker4
$dima->setSalary(1000); // об'єкт класа воркер, і установлює полю salary значення

//ну а тут по принципу воркер2, вивів на екран
echo "Завдання 4 <br>";
echo "Об'єкт класу Діма," .
    " його вік - " . $dima->age .
    ", його зарплатня - " . $dima->getSalary() .
    "<br> произвидение віку і зарплатні становить: " . $dima->age*$dima->getSalary();
