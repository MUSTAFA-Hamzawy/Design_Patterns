<?php


namespace DesignPatterns\Creational\AbstractFactory;


class MacButton extends AbstractButton
{

  public function render(): void
  {
    echo 'Rendering Apple button';
  }
}