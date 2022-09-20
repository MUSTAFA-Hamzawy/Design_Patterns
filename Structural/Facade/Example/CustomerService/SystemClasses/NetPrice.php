<?php

class NetPrice {


  public function addTaxes(): float{
    echo 'we are setting the taxes';
    return 1.0;
  }

  public function getPrice(Product $product){
    $product->price -= $this->addTaxes();
    echo 'we are calculating the prod price';

    return $product->price;
  }
}