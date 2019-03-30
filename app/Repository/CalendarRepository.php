<?php

namespace App\Repository;


use App\Entity\Event;
use App\Entity\NewEvent;

class CalendarRepository
{
    protected $event;
    protected $newEvent;

    function __construct(Event $event,NewEvent $newEvent)
    {
        $this->event = $event;
        $this->newEvent = $newEvent;
    }

    public function checkDayOnUse($date)
    {
        return $this->newEvent->select('*')->where([
            'start_month' => $date['month'],
            'start_year'  => $date['year']
        ])->get();
    }

    public function checkEventsToDay($date)
    {
        return $this->newEvent->select('*')->where([
            'day' => $date['day'],
            'month' => $date['month'],
            'year' => $date['year']
        ])->get();
    }
}