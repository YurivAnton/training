<?php


class Cube implements iFigure3d
{
    private $a;

    public function getVolume()
    {
        return $this->a * $this->a * $this->a;
    }
    public function getSurfaceSquare()
    {
        return $this->a * $this->a;
    }
}