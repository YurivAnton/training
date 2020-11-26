<?php
require_once 'classes/Tag.php';
require_once 'classes/Image.php';
require_once 'classes/Link.php';

for($i=1; $i<=5; $i++){
    echo (new Link())->setAttr('href', "/training/$i.php")->setText("$i")->show();
    echo '<br>';
}