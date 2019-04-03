<?php
/**
 * Created by PhpStorm.
 * User: yarhovor
 * Date: 03.04.19
 * Time: 14:29
 */

error_reporting(E_ALL);
ini_set('display_errors', true);

//require_once __DIR__ . '/User.php';
include ('User.php');
// Якщо не використовувати include, то воно вибиває 500 помилку (тіпа не находить класс Юзер)
// А якщо через инклуд - то все паше. і через - require_once __DIR__ . '/User.php';
//( ! ) Fatal error: Uncaught Error: Class 'User' not found in /home/yarhovor/project/homework/classes/vasy5.php on line 14 (зараз на 20 строкі)
//( ! ) Error: Class 'User' not found in /home/yarhovor/project/homework/classes/vasy5.php on line 14 (20 зараз)


class Worker5 extends User

{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$ivan = new Worker5();
$ivan->setSalary(1000);
$ivan->setName('Іван');
$ivan->setAge(25);


$vasy = new Worker5();
$vasy->setSalary(2000);
$vasy->setName('Вася');
$vasy->setAge(26);

echo "Завдання 5 <br>";
echo "Сума зарплатні " . $ivan->getName() .  " та " .  $vasy->getName() . ": " . ($ivan->getSalary()+$vasy->getSalary() .' $');//
