<?php

require_once "Ship.php";
require_once "Truck.php";

class TransportFactory
{
  public function getTransportInstance(string $type) : Transport
  {
    return new $type();

    // or
/*    switch ($type)
    {
      case "Ship":
        return new Ship();
        break;
      case "Truck":
        return new Truck();
        break;
    }
    */
  }
}