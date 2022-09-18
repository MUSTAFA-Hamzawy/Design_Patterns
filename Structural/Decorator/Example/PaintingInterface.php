<?php

namespace DesignPatterns\Structural\Decorator;

interface PaintingInterface
{
  public function paint(Car $car): bool;
}