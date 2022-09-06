<?php

interface CoolDownInterface
{
    public function coolingDown(float $temp): string;
}