<?php

class Dot implements Graphic
{
  protected int $currentX;
  protected int $currentY;

  /**
   * @param int $currentX
   */
  public function __construct(Dot $dot)
  {
    $this->currentX = $dot->currentX;
    $this->currentY = $dot->currentY;
  }


  public function move(int $x, int $y): bool
  {
    $this->currentX = $x;
    $this->currentY = $y;
    return true;
  }

  public function draw(): bool
  {
    echo 'drawing a dot at x = ' . $this->CurrentX . ', y=' . $this->CurrentY;
    return true;
  }
}