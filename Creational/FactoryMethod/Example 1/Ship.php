<?php

require_once "Transport.php";

class Ship implements Transport
{

  public function deliver()
  {
    echo 'Deliver By Sea In a container. <br>';

  }
}