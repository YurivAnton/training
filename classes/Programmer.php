<?php


class Programmer extends Employee implements iProgrammer
{
    private $langs = [];

    public function getLang()
    {
        return $this->langs;
    }
    public function addLang($lang)
    {
        $this->langs[] = $lang;
    }
}