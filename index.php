<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'classes/Date.php';

$date = new Date('2020', '12', '31');
echo $date->weekDay;