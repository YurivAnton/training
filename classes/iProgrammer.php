<?php


interface iProgrammer
{
    public function __construct($name, $salary);
    public function getName();
    public function getSalary();
    public function getLang();
    public function addLang($lang);
}