<?php


class Student extends User
{
    private $scholarship;

    public function increaseRevenue($value)
    {
        $this->scholarship = $this->scholarship + $value;
    }
    public function decreaseRevenue($value)
    {
        $this->scholarship = $this->scholarship + $value;
    }
}