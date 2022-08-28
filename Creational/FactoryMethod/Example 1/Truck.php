<?php

require_once "Transport.php";

class Truck implements Transport
{

  public function deliver()
  {
      echo 'Deliver By Land In a box. <br>';
  }
}