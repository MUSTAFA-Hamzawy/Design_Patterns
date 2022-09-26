<?php

class Circle extends Dot
{
  private int $radius;

  /**
   * @param int $radius
   */
  public function __construct(int $radius, Dot $center)
  {
    parent::__construct($center);
    $this->radius = $radius;
  }

  public function draw(): bool
  {
    echo 'draw a cricle at x = ' . $this->currentX . ' y =' . $this->currentY .
        'with radius = ' . $this->radius;
    return true;
  }


}