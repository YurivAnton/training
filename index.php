<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'classes/Tag.php';
require_once 'classes/Form.php';
require_once 'classes/Input.php';
require_once 'classes/Submit.php';
require_once 'classes/Password.php';
require_once 'classes/Hidden.php';
require_once 'classes/Textarea.php';
require_once 'classes/Checkbox.php';
require_once 'classes/Hidden.php';

$form = (new Form)->setAttrs(['action'=>'','method'=>'GET']);
echo $form->open();
    echo (new Checkbox)->setAttr('name', 'checkbox');
    echo (new Input)->setAttr('name', 'user');
    echo new Submit;
echo  $form->close();