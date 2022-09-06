<?php

use Motherboard\Motherboard;

class SimpleComputer extends Computer
{


    public function __construct(Motherboard $motherboard, Mouse $mouse, Keyboard $keyboard, Speaker $speaker,ComputerCase $case, Monitor $monitor)
    {
        $this->motherboard = $motherboard;
        $this->mouse = $mouse;
        $this->keyboard = $keyboard;
        $this->speaker = $speaker;
        $this->monitor = $monitor;
        $this->case = $case;
    }

    public function turnOn() : string{
        return "Normal Computer Booting";
    }
public function turnOff() : string{
    return "Normal Computer Shut down";
    }
}