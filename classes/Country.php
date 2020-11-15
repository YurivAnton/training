<?php


class Country
{
    use Helper;
    private $population;

    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }
    public function getPopulation()
    {
        return $this->population;
    }
}