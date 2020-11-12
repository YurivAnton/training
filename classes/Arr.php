<?php


class Arr
{
    private $nums = [];
    private $avgHelper;

    public function __construct(){
        $this->avgHelper = new AvgHelper;
    }
    public function add($num){
        $this->nums[] = $num;
    }
    public function getAvgMeanSum(){
        $nums = $this->nums;
        return $this->avgHelper->getAvg($nums) +
            $this->avgHelper->getMeanSquare($nums);
    }
}