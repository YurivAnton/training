<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'classes/Tag.php';

echo (new Tag('input'))->setAttr('class', 'eee zzz kkk')->removeClass('zzz')->open();