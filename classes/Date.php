<?php


class Date
{
    private $date;
    private $months = [
        'ua' =>[1=>'січень', 'лютий', 'березень', 'квітень', 'травень', 'червень', 'липень', 'серпень', 'вересень', 'жовтень', 'листопад', 'грудень'],
        'en' =>[1=>'january', 'february', 'march', 'april', 'may', 'jun', 'july', 'august', 'september', 'october', 'november', 'december'],
    ];
    private $days = [
        'ua' =>['неділя', 'понеділок', 'вівторок', 'середа', 'четвер', 'пятниця', 'субота'],
        'en' =>['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'],
    ];

   public function __construct($date = null)
   {
       if($date == null)
       {
           $this->date = date('Y-m-d');
       } else {
           $this->date = $date;
       }
   }
   public function getDay()
   {
        return date('d', strtotime($this->date));
   }
   public function getMonth($lang = null)
   {
        switch($lang)
        {
            case 'ua':
                return $this->months['ua'][date('m', strtotime($this->date))];
            break;
            case 'en':
                return $this->months['en'][date('m', strtotime($this->date))];
            break;
            default:
                return date('m', strtotime($this->date));
        }
   }
   public function getYear()
   {
        return date('Y', strtotime($this->date));
   }
   public function getWeekDay($lang = null)
   {
        switch($lang)
        {
            case 'ua':
                return $this->days['ua'][date('w', strtotime($this->date))];
            break;
            case 'en':
                return $this->days['en'][date('w', strtotime($this->date))];
            break;
            default:
                return date('w', strtotime($this->date));
        }
   }
   public function addDay($value = '')
   {
       if(!empty($value)){
           $date = date_create($this->date);
           date_modify($date, $value.' day');
           $this->date = date_format($date, 'Y-m-d');
           return $this;
       } else {
           $date = $this->date;
           return $this;
       }
   }
   public function subDay($value = '')
   {
       if(!empty($value)){
           $date = date_create($this->date);
           date_modify($date, -$value.' day');
           date_format($date, 'Y-m-d');
           $this->date = date_format($date, 'Y-m-d');
           return $this;

       } else {
           $date = $this->date;
           return $this;
       }
   }
   public function addMonth($value = '')
   {
       if(!empty($value)){
           $date = date_create($this->date);
           date_modify($date, $value.' month');
           $this->date = date_format($date, 'Y-m-d');
           return $this;
       } else {
           $date = $this->date;
           return $this;
       }
   }
   public function subMonth($value = '')
   {
       if(!empty($value)){
           $date = date_create($this->date);
           date_modify($date, -$value.' month');
           $this->date = date_format($date, 'Y-m-d');
           return $this;
       } else {
           $date = $this->date;
           return $this;
       }
   }
   public function addYear($value = '')
   {
       if(!empty($value)){
           $date = date_create($this->date);
           date_modify($date, $value.' Year');
           date_format($date, 'Y-m-d');
           $this->date = date_format($date, 'Y-m-d');
           return $this;
       } else {
           $date = $this->date;
           return $this;
       }
   }
   public function subYear($value = '')
   {
       if(!empty($value)){
           $date = date_create($this->date);
           date_modify($date, -$value.' Year');
           $this->date = date_format($date, 'Y-m-d');
           return $this;
       } else {
           $date = $this->date;
           return $this;
       }
   }
   public function format($format)
   {
       // выведет дату в указанном формате
       // формат пусть будет такой же, как в функции date
   }
   public function __toString()
   {
       return $this->date;
       // выведет дату в формате 'год-месяц-день'
   }
}
