<?php


namespace DesignPatterns\Creational\AbstractFactory;


abstract class AbstractTextInput
{
  public string $text;
  public float $width;
  public float $height;

  public function setDimensions(float $w, float $h):void{
    $this->width = $w;
    $this->height = $h;
  }

  abstract public function postText(): void;
}