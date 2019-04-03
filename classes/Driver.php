<?php
/**
 * Created by PhpStorm.
 * User: yarhovor
 * Date: 03.04.19
 * Time: 15:46
 */

include ('Worker5.php');

class Driver extends Worker5
{
    private $dr_experience, $dr_category;

    /**
     * @return mixed
     */
    public function getDrExperience()
    {
        return $this->dr_experience;
    }

    /**
     * @param mixed $dr_experience
     */
    public function setDrExperience($dr_experience): void
    {
        $this->dr_experience = $dr_experience;
    }

    /**
     * @return mixed
     */
    public function getDrCategory()
    {
        return $this->dr_category;
    }

    /**
     * @param mixed $dr_category
     */
    public function setDrCategory($dr_category): void
    {
        $this->dr_category = $dr_category;
    }

}

$driver = new Driver();
$driver->setDrExperience(4);
$driver->setDrCategory('B');
$driver->setSalary(10000);
$driver->setAge(23);
$driver->setName('Воділа');

echo '<br><br> Завдання 6 <br>';
echo "Name: " . $driver->getName().'<br>';
echo "Age: " . $driver->getAge().'<br>';
echo "Salary: " . $driver->getSalary().'<br>';
echo "Driving experience: " . $driver->getDrExperience().'<br>';
echo "Driving category: " . $driver->getDrCategory();