<?php


class Interval
{
    private $date1;
    private $date2;
    private $toDays;
    private $toMonth;
    private $toYears;
    private $result = [];

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function toDays()
    {
        $toDays = strtotime($this->date1) - strtotime($this->date2);
        $this->toDays = floor(abs($toDays/60/60/24));
        $result['days'] = $this->toDays;
        return $this->toDays;
    }
    public function toMonth()
    {
        $toMonth = strtotime($this->date1) - strtotime($this->date2);
        $this->toMonth = floor(abs($toMonth/60/60/24/30));
        return $this->toMonth;
    }
    public function toYears()
    {
        $toYears = strtotime($this->date1) - strtotime($this->date2);
        $this->toYears = floor(abs($toYears/60/60/24/30/12));
        return $this->toYears;
    }
    public function __toString()
    {

    }
}
