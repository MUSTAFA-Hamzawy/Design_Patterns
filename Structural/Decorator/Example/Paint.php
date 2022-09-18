<?php

namespace DesignPatterns\Structural\Decorator;

class Paint implements PaintingInterface
{
  private const COLOR = '';
  public function paint(Car $car): bool
  {
    $car->setColor(self::COLOR);
    return true;
  }
}