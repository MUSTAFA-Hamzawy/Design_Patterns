<?php


namespace DesignPatterns\Creational\AbstractFactory;


class MacTextInput extends AbstractTextInput
{

  public function postText(): void
  {
    echo 'sending form text to mac server';
  }
}