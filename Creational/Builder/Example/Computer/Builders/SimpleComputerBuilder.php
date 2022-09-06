<?php

class SimpleComputerBuilder implements Builder
{
    public function buildMouse(): Mouse
    {
        return new Mouse();
    }

    public function buildKeyboard(): Keyboard
    {
        return new Keyboard();
    }

    public function buildMotherboard(): \Motherboard\Motherboard
    {
        $cpu = new \Motherboard\CPU();
        $gpu = new \Motherboard\GPU();
        $ram = new \Motherboard\RAM();
        $lan = new \Motherboard\NetworkCard();

        return new \Motherboard\Motherboard($cpu, $gpu, $lan, $ram);
    }

    public function buildSpeaker(): Speaker
    {
        return new Speaker();
    }

    public function buildMonitor(): Monitor
    {
        return new Monitor();
    }

    public function buildCase(): ComputerCase
    {
        return new ComputerCase();
    }

    public function getComputer(): Computer
    {
        return new SimpleComputer($this->buildMotherboard(), $this->buildMouse(), $this->buildKeyboard(), $this->buildSpeaker(), $this->buildCase(), $this->buildMonitor());
    }
}