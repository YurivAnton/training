<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

spl_autoload_register();

$coreController = new \Core\Controller();
$projectController = new \project\Controller();