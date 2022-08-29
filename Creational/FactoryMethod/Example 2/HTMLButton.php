<?php


class HTMLButton implements Button
{

  public function onClick()
  {
    echo "Executing some web actions";
  }

  public function render()
  {
    echo "render web UI";
  }
}