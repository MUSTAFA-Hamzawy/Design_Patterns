<?php


namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\AbstractButton as abstractButton;
use DesignPatterns\Creational\AbstractFactory\MacButton;
use DesignPatterns\Creational\AbstractFactory\MacTextInput;

class MacForm implements AbstractFormFactory
{

  public function createButton(): abstractButton
  {
    return new MacButton();
  }

  public function createTextInput(): AbstractTextInput
  {
    return new MacTextInput();
  }
}