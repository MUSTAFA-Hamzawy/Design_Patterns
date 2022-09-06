<?php

Interface Builder
{
    public function buildMouse(): Mouse;
    public function buildKeyboard(): Keyboard;
    public function buildMotherboard(): \Motherboard\Motherboard;
    public function buildSpeaker(): Speaker;
    public function buildMonitor(): Monitor;
    public function buildCase(): ComputerCase;
    public function getComputer(): Computer;
}