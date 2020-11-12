<?php


class ArrayAvgHelper
{
    public static function getAvg1($arr){
        return self::getSum($arr, 1);
    }
    public static function getAvg2($arr){
        return self::getSum($arr, 2);
    }
    public static function getAvg3($arr){
        return self::getSum($arr, 3);
    }
    private static function getSum($arr, $power){
        $sum = 0;
        foreach($arr as $elem){
            $sum += pow($elem, $power);
        }
        return $sum;
    }
}