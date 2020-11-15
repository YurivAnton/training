<?php


class User
{
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($name, $surname, $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }
    public function __toString()
    {
        return $this->surname.' '.$this->name.' '.$this->patronymic;
    }
    /*public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    abstract public function increaseRevenue($value);
    abstract public function decreaseRevenue($value);*/
}