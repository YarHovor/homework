<?php
/**
 * Created by PhpStorm.
 * User: yarhovor
 * Date: 03.04.19
 * Time: 14:29
 */

class User
{
    protected $name, $age;


    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}