<?php
class Actor
{

    public $name;
    public $surname;
    public $age;

    public function __construct($_name, $_surname, $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }
}
