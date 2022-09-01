<?php


namespace DesignPatterns\Creational\AbstractFactory;


class AndroidTextInput extends AbstractTextInput
{

  public function postText(): void
  {
    echo 'sending form text to the API';
  }
}