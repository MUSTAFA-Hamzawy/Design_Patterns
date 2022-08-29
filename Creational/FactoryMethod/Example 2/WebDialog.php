<?php


class WebDialog implements Dialog
{

  public function createButton()
  {
    return new HTMLButton();
  }
}