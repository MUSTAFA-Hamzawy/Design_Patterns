<?php

// for interface segregation
interface BuildCoolSystemInterface
{
    public function buildCoolingSystem(): Cooling;

}