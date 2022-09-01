<?php


namespace DesignPatterns\Creational\AbstractFactory;


interface AbstractFormFactory
{
  public function createButton():AbstractButton;
  public function createTextInput():AbstractTextInput;
}