<?php

namespace App\Http\Controllers;

use App\Services\CalendarService;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    protected $cs;
    function __construct(CalendarService $cs)
    {
        $this->cs = $cs;
    }

    public function getMonth(Request $request)
    {
        $days = $this->cs->getInfoDayOfMonth($request->all());
        return response()->json($days);
    }

    public function getDayInfo($date)
    {
        $events = $this->cs->getEventsOfDay($date);
        return response()->json($events);
    }

}
