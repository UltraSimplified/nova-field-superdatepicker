<?php

namespace UltraSimplified\VCalendar\Interval;

interface IntervalDatesVCalendar
{
    public function type() : string ;

    public function value() : int;
}
