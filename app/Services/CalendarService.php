<?php

namespace App\Services;


use App\Repository\CalendarRepository;

class CalendarService
{
    protected $cr;
    function __construct(CalendarRepository $cr)
    {
        $this->cr = $cr;
    }

    public function getInfoDayOfMonth($month)
    {

        return $this->cr->checkDayOnUse($month);
    }

    public function getEventsOfDay($date)
    {
        return $this->cr->checkEventsToDay($date);
    }
}