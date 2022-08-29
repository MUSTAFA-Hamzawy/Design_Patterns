c<?php


class WindowsDialog implements Dialog
{

  public function createButton()
  {
    return new WindowsButton();
  }
}