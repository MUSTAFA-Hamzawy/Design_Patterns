<?php
use Motherboard\Motherboard;
abstract class Computer
{
    protected Motherboard $motherboard;
    protected Mouse $mouse;
    protected Keyboard $keyboard;
    protected Speaker $speaker;
    protected ComputerCase $case;
    protected Monitor $monitor;

    abstract public function turnOn(): string;
    abstract public function turnOff(): string;
    public function sleep(): string{
        return "Sleeping Computer";
    }
    public function hibernate(): bool{
        return true;
    }
}