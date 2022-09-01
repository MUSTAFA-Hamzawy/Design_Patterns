<?php
namespace DesignPatterns\Creational\AbstractFactory\WebButton;
use DesignPatterns\Creational\AbstractFactory\AbstractButton;


class WebButton extends AbstractButton
{

  public string $displayType;

  /**
   * WebButton constructor.
   */
  public function __construct()
  {
    $this->displayType = 'inline';
  }


  public function render(): void
  {
      echo 'Rendering Web button';
  }
}