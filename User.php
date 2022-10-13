<?php
class User
{
    public $name;
    public $age; // Оголосимо приватним:
    private function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;
    }
    // Метод зміни віку користувача:
    public function setAge($age)
    {
        // Перевіримо вік на коректність:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
    // Метод додавання до віку:
    public function addAge($years)
    {
        $newAge = $this->age + $years; // обчислимо новий вік
        // Перевіримо вік на коректність:
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge; // оновимо, якщо новий вік пройшов перевірку
        }
    }
}
