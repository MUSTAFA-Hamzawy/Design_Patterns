<?php

interface Graphic
{
  public function move(int $x, int $y): bool;
  public function draw(): bool;
}