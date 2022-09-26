<?php

class CompoundGraphic implements Graphic
{
  private array $shapes;

  /**
   * @param Graphic $shapes
   */
  public function __construct(Graphic $shapes)
  {

  }

  public function add(Graphic $shape)
  {
    $this->shapes[] = $shape;
  }

  public function remove(Graphic $shape)
  {
//    searching for this child and remove it
  }

  public function move(int $x, int $y): bool
  {
    foreach ($this->shapes as $shape)
      $shape->move($x, $y);

    return true;
  }

  public function draw(): bool
  {
    foreach ($this->shapes as $shape)
      $shape->draw();

    return true;
  }
}