<?php

namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\AbstractButton as abstractButton;
use DesignPatterns\Creational\AbstractFactory\WebButton\WebButton as webButton;
use DesignPatterns\Creational\AbstractFactory\WebTextInput;


class WebForm implements AbstractFormFactory
{

  public function createButton(): abstractButton
  {
    return new webButton();
  }

  public function createTextInput(): AbstractTextInput
  {
    return new WebTextInput();
  }
}