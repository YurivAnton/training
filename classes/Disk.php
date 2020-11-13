<?php


class Disk implements iFigure, iCircle
{
    const PI = 3.14;
    private $r;

    public function __construct($r)
    {
        $this->r = $r;
    }
    public function getSquare()
    {
        return self::PI * $this->r * $this->r;
    }
    public function getPerimeter()
    {
       return 2 * self::PI * $this->r;
    }
    public function getRadius()
    {
        return $this->r;
    }
    public function getDiameter()
    {
        return 2 * $this->r;
    }
}