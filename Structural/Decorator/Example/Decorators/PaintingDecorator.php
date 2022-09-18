<?php

namespace DesignPatterns\Structural\Decorator;

class PaintingDecorator implements PaintingInterface
{
  private PaintingInterface $painter;

  public function __construct(PaintingInterface $painting)
  {
    $this->painter = $painting;
  }

  public function paint(Car $car): bool
  {
    $this->painter->paint($car);return true;
  }


}