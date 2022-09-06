<?php

use Motherboard\Motherboard;

class CoolableComputer extends Computer implements CoolDownInterface
{
    private Cooling $coolingSystem;

    public function __construct(Motherboard $motherboard, Mouse $mouse, Keyboard $keyboard, Speaker $speaker,ComputerCase $case, Monitor $monitor, Cooling $coolSys)
    {
        $this->motherboard = $motherboard;
        $this->mouse = $mouse;
        $this->keyboard = $keyboard;
        $this->speaker = $speaker;
        $this->monitor = $monitor;
        $this->case = $case;
        $this->coolingSystem = $coolSys;
    }

    public function coolingDown(float $temp):string
    {
        return "reduced Temperature from {$temp} to " . ($temp - 10);
    }



    public function turnOn() : string
    {
        return "Computer with cooling system is opened";
    }
    public function turnOff() : string
    {
        return "Computer with cooling system is closed";
    }
}