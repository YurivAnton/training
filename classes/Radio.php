<?php


class Radio extends Tag
{
    public function __construct()
    {
        $this->setAttr('type', 'radio');
//        $this->setAttr('value', '1');
        parent::__construct('input');
    }
    public function open()
    {
        $name = $this->getAttr('name');
        if($name){
            if(isset($_REQUEST[$name])){
                $value = $_REQUEST[$name];

                if($value == 1){
                    $this->setAttr('checked');
                }else{
                    $this->removeAttr('checked');
                }
            }
            return parent::open();
        }else{
            return parent::open();
        }
    }
    public function __toString()
    {
        return $this->open();
    }
}