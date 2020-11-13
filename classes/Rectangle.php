<?php


class Rectangle implements iFigure, iTetragon
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function getSquare()
    {
        return 'Площа = '.($this->a * $this->b);
    }
    public function getPerimeter()
    {
        return 'Периметер = '.((2*$this->a) + (2*$this->b));
    }
    public function getA()
    {
        return 'сторона A = '.$this->a;
    }
    public function getB()
    {
        return 'сторона B = '.$this->b;
    }
    public function getC()
    {
        return 'сторона C = '.$this->a;
    }
    public function getD()
    {
        return 'сторона D = '.$this->b;
    }
}