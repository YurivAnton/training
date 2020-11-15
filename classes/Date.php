<?php


class Date
{
    public $year;
    public $month;
    public $day;

    public function __construct($year, $month, $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }
    public function __get($property)
    {
        $thisDay = date('w', strtotime($this->year.$this->month.$this->day));
        $days = ['ne', 'po', 'viv', 'ser', 'chet', 'pia', 'sub'];
        if($property == 'weekDay')
        {
            echo $days[$thisDay];
        }
    }
}