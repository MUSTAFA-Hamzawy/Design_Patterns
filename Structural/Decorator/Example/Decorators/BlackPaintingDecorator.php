<?php

namespace DesignPatterns\Structural\Decorator;

class BlackPaintingDecorator extends PaintingDecorator
{
  const MY_COLOR = 'Black';

  public function paint(Car $car): bool
  {
    $car->setColor(self::MY_COLOR);
    return parent::paint($car); // TODO: Change the autogenerated stub
  }

}