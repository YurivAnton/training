<?php


class Geometry
{
    const PI=3.14;
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function getCircleSquare($radius){
        return self::PI * pow($radius, 2);
    }
    public function getCircleCircuit(){
        return 2 * self::PI * $this->radius;
    }
    public static function getCircleVolume($radius){
        return (4/3)*self::PI*pow($radius, 3);
    }
}