<?php


class Link extends Tag
{
    const ACTIVE = 'active';
    public function __construct()
    {

        $this->setAttr('href', '');
        parent::__construct('a');
    }

    public function open()
    {
        $this->activateSelf();
        return parent::open();
    }

    private function activateSelf()
    {
        if($this->getAttr('href') == $_SERVER['REQUEST_URI']){
            $this->addClass(self::ACTIVE);
        }
    }
}