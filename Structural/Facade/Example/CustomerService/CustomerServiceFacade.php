<?php

class CustomerServiceFacade{
  private Product $product;

  public function orderProduct(int $productCode): bool  {
    $this->product = new Product();
    // Here, the customer service employer will customize that product,
//    set the address to ship, calc the price, subtract the taxes and so on ...
    $deliver = new Shipping();
    $deliver->deliver($this->product);
    echo 'OK, Your order is completed.';
    return true;
  }
}
