<?php


class Invoice {
  private $customerName;
  private $date;
  private $qunatity;

  public function createProductInvoice(Product $product) : float {
    $this->customerName = 'NO Name';
    $this->date = time();
    echo 'we are creating the Invoice<br>';

    return $product->price;   //any implementation :)
  }
}