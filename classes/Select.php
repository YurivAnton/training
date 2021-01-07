<?php


class Select extends Tag
{
    public function __construct()
    {
        parent::__construct('select');
    }

    private $items = [];

    public function add(Option $option)
    {
        $this->items[] = $option;
        return $this;
    }

    public function show()
    {
        $result = $this->open();

        foreach($this->items as $item){
            $result .= $item->show();
        }

        $result .= $this->close();

        return $result;
    }
}