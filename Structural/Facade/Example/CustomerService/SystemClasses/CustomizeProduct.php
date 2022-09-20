<?php

Class CustomizeProduct{

  public function setColor(string $color, Product $prod) {
    $prod->setColor($color);
    echo 'we are setting the prod color<br>';
  }


  public function setQuantity(int $number, Product $prod) {
    $prod->setColor($number);
    echo 'we are setting the prod Quantity <br/>';

  }
}