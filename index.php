<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
function isNumberInRange($num){
    if($num > 0 and $num<=10){
        return true;
    } else {
        return false;
    }
}
function getDigitsSum($num){
    $sum = 0;
    $arr = str_split($num, 1);
    foreach($arr as $elem){
        $sum += $elem;
    }
    return $sum;
}
function isEven($num){
    if($num%2 == 0){
        return true;
    } else {
        return false;
    }
}
function getDivisors($num){
    $arrDivisors = [];
    for($i=1; $i<=$num; $i++){
        if($num%$i == 0){
            $arrDivisors[] = $i;
        }
    }
    return $arrDivisors;
}
function getCommonDivisors($num1, $num2){
    $arr = [];
    foreach(getDivisors($num1) as $elem1){
        foreach(getDivisors($num2) as $elem2){
            if($elem1 == $elem2){
                $arr[] = $elem1;
            }
        }
    }
    return $arr;
}
function translate($str){
    $ua = ['a'=>'а', 'b'=>'б', 'v'=>'в'];
    $arr = str_split($str, 1);
    $newStr = '';
    foreach($ua as $key=>$elem){
        foreach($arr as $elem1){
            if($elem1 === $key){
                $newStr .= $elem;
            }
        }
    }
    return $newStr;
}
function happyTicket(){
    $arr = [];
    for($i=1000; $i<=999999; $i++){
        $arr = str_split($i, 1);
        $sum1 = array_sum(array_splice($arr, -3, 3));
        $sum2 = array_sum(array_splice($arr, -3, 3));
        if($sum1 == $sum2){
            echo $i.'<br>';
        }
    }
}
function cut($str, $num = 10){
    $newStr = substr($str, 0, $num);
    return $newStr;
}
function last($arr){
    echo array_shift($arr).'<br>';
    if(!empty($arr)){
        last($arr);
    }
}
function sumSimple($num){
    $sum = array_sum(str_split($num, 1));
    echo $sum.'<br>';
    if($sum > 10){
        sumSimple($sum);
    }
}
?>

<?php
$var = mktime(23,59,59, 12, 31) - time();
echo floor($var / 60 / 60 / 24).' - Днів до Нового Року!!!';

$week = ['ned', 'pon', 'viv', 'ser', 'chet', 'piat', 'sub'];
$month = [1=>'jan', 'feb', 'mar', 'april', 'may', 'jun', 'jul', 'aug', 'sep', 'ock', 'nov', 'dec'];

echo '<br>';

require_once 'classes/Figure.php';
require_once 'classes/Disk.php';
require_once 'classes/FiguresCollection.php';

$figureCollection = new FiguresCollection();
$figureCollection->addFigure(new Disk(10));
$figureCollection->addFigure(new Disk(10));
echo $figureCollection->getTotalSquare().'<br>';
echo $figureCollection->getTotalPerimeter();
$disk = new Disk(10);
echo $disk->getPerimeter();
echo $disk->getSquare();