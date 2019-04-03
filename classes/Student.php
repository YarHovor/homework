<?php
/**
 * Created by PhpStorm.
 * User: yarhovor
 * Date: 03.04.19
 * Time: 15:16
 */

require_once __DIR__ . '/User.php';

class Student extends User
{
    private $scholarship, $course;

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

}
$ivan = new Student();
$ivan->setScholarship(1234.56);
$ivan->setCourse(5);
$ivan->setName('Іван');
$ivan->setAge(25);


$vasy = new Student();
$vasy->setScholarship(1678.99);
$vasy->setCourse(6);
$vasy->setName('Вася');
$vasy->setAge(26);


echo "Завдання 5.1<br>";
echo "1. Студент " . $ivan->getName() .
    " його вік - " . $ivan->getAge() . " років" .
    ", вчиться на " . $ivan->getCourse() . " курсі, " .
    "отримує стипендію в розмірі: " . $ivan->getScholarship() . " $" . "<br>";
echo "2. Студент " . $vasy->getName() .
    " його вік - " . $vasy->getAge() . " років" .
    ", вчиться на " . $vasy->getCourse() . " курсі, " .
    "отримує стипендію в розмірі: " . $vasy->getScholarship() . " $";