<?php


namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\AbstractButton as abstractButton;
use DesignPatterns\Creational\AbstractFactory\AndroidButton;
use DesignPatterns\Creational\AbstractFactory\AndroidTextInput;

class AndroidForm implements AbstractFormFactory
{

  public function createButton(): abstractButton
  {
    return new AndroidButton();
  }

  public function createTextInput(): AbstractTextInput
  {
    return new AndroidTextInput();
  }
}