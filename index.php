<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'classes/iTetragon.php';
require_once 'classes/iFigure.php';
require_once 'classes/iCircle.php';
require_once 'classes/Rectangle.php';
require_once 'classes/Disk.php';

$rectangle = new Rectangle(2, 3);
$arr = get_class_methods('Rectangle');
foreach($arr as $elem){
    if($elem !== '__construct'){
        echo $rectangle->$elem().'<br>';
    }

}