<?php

class User
{
    private $name;
    private $age;
    private $salary;
    public function __construct($var1, $var2, $name, $age)
    {
        echo $var1 + $var2; // Знайдемо суму параметрів

        $this->name = $name; // Запишемо дані у властивість
        $this->age = $age; // Запишемо дані у властивість age

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo 'Destruct';
        unset($this->age);
    }

    public  function __get($age)
    {
        return $this->$age . '- get';
    }

    public  function __set($name, $value)
    {
        $this->$name = $value;
    }
}
$user = new User(1, 2, 'Maksym', 36); // виведе 3
$user->setName('Mykola');
echo $user->getName() . "\n";
echo $user->age . ' ';
echo "-----------";
$user->salary = 80;
echo $user->salary;
