<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'classes/Date.php';

$date = new Date();
$date->addDay(2);
echo $date;
