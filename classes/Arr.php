<?php


class Arr
{
    private $nums = [];
    //private $avgHelper;

    /*public function __construct(){
        $this->avgHelper = new AvgHelper;
    }*/
    public function __toString()
    {
        return (string) array_sum($this->nums);
    }
    public function add($num){
        $this->nums[] = $num;
        return $this;
    }
    public function getAvgMeanSum(){
        $nums = $this->nums;
        return $this->avgHelper->getAvg($nums) +
            $this->avgHelper->getMeanSquare($nums);
    }
}