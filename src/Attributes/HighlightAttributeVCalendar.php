<?php

namespace UltraSimplified\VCalendar\Attributes;

use UltraSimplified\VCalendar\Popover\PopoverVCalendar;

class HighlightAttributeVCalendar extends TypeAttributeVCalendar
{
    public $typeName = "highlight";

    public function __construct($highlight = null)
    {
        if($highlight == null) {
            $highlight = true;
        }

        $this->type($highlight);
    }
}
