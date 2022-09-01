<?php


namespace DesignPatterns\Creational\AbstractFactory;


class WebTextInput extends AbstractTextInput
{

  public function postText(): void
  {
    echo 'sending form text to backend server';
  }
}