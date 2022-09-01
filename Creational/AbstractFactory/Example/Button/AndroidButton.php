<?php


namespace DesignPatterns\Creational\AbstractFactory;

class AndroidButton extends AbstractButton
{

  public function render(): void
  {
    echo 'Rendering Android button';
  }
}