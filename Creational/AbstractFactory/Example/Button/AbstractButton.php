<?php


namespace DesignPatterns\Creational\AbstractFactory;


abstract class AbstractButton
{
  public string $color;
  public float $width;
  public float $height;

  public function setDimensions(float $w, float $h):void{
    $this->width = $w;
    $this->height = $h;
  }

  abstract public function render(): void;
}