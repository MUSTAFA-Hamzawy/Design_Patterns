<?php


class WindowsButton implements Button
{
  public function onClick()
  {
    echo "<br>Executing Windows action.";
  }

  public function render()
  {
    echo "<br>render a program";
  }
}