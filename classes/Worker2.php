<?php
/**
 */

class Worker2 // Сделал класс Worker2
{
    private $name, $age, $salary; // объявил поля private (свойства)

    //об'євив методи ( функції)

    // метод в якуому нема парметра так сказать, потрібен ретурн який повертає це значення
    public function getName()// об'явив метод гетНейм, який повертає значення свойства
    {
        return $this->name; // ось так
    }
    // метод в якому буду змінюватися значення в парматрах потрабна переменная (змінна)
    public function setName($name)// об'явив метод сетНейм який буде полоучать значення І'мя (та мінять його) ( функція, але це маетод в класах)
    {
        $this->name=$name;// ось так
    }
    // методи для получення та обробки віку
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age=$age;
    }
    //методи для получення та обробки зарплатні
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary=$salary;
    }
}

$vanya = new Worker2();// об'єкт Ваня який відноситься до класу Воркер2
$vanya->setName('Ivan');//в об'єкті ваня визвали сетНейм для завдання параметру імя
$vanya->setAge(25);// задали парметр вік
$vanya->setSalary(1000);// завдали парметр зарплатні

$vasy = new Worker2();//об'єкт Вася який теж відноситься до класу Воркер2
//таке як було з об'єктов Іван
$vasy->setName('Vasiliy');
$vasy->setAge(26);
$vasy->setSalary(2000);

// теппер виводимо на екран, з-за допомогою методів гет****
echo "Завдання 2 <br>";
echo "Сума віку " . $vanya->getName() . " та " .  $vasy->getName() . ": " . ($vanya->getAge()+$vasy->getAge()) . "<br>";//
echo "Сума зарплатні " . $vanya->getName() .  " та " .  $vasy->getName() . ": " . ($vanya->getSalary()+$vasy->getSalary() .' $');//


