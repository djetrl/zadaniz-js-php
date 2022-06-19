<?php

class Interval
{
    private $d1;
    private $d2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->d1 = $date1;
        $this->d2 = $date2;
    }

    public function toDays()
    {
        // вернет разницу в днях
        $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
        return $interval->d;
    }

    public function toMonths()
    {
        // вернет разницу в месяцах
        $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
        return $interval->m;
    }

    public function toYears()
    {
        // вернет разницу в годах
        $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
        return $interval->y;
    }

    public function __toString()
    {
        // выведет результат в виде массива
        // ['years' => '', 'months' => '', 'days' => '']
        return "['years' => '".$this->toYears()."', 'months' => '".$this->toMonths()."', 'days' => '".$this->toDays()."']";
    }
}
?>