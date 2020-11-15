<?php


class Sphere implements iSphere
{
    private $radius;
    //const PI;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getVolume()
    {
        return (4 * self::PI * (pow($this->radius, 3)))/ 3;
    }
    public function getSquare()
    {
        return 4 * self::PI * (pow($this->radius, 2));
    }
}