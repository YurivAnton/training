<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'menu.php';
echo (new Link())->setAttr('href', 'index.php')->setText('index')->show();
