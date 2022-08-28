<?php

require_once "TransportFactory.php";

class Store
{
  public TransportFactory $transportFactory;

  public function __construct(){
    $this->transportFactory = new TransportFactory();
  }

  public function testingMethod(){

    // assume we have a product need to be delivered using truck
    $truck = $this->transportFactory->getTransportInstance("Truck");
    $truck->deliver();      //Deliver By Land In a box.

    // assume we have another product need to be delivered using ship
    $truck = $this->transportFactory->getTransportInstance("Ship");
    $truck->deliver();    //Deliver By Sea In a container.
  }
}

// Testing
$store = new Store();
$store->testingMethod();