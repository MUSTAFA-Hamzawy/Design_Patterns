<?php

namespace DesignPatterns\Creational\Prototype;
require_once "WebDeveloper.php";

class Testing
{
  public static function test(){

    // create object
    $devMustafa = new WebDeveloper("Mustafa", 21, 1, "Giza");
    $devMustafa->setSkills(['Web Skills']);
    print_r($devMustafa);

    // clone it
    $devAhmed = $devMustafa->clone();
    $devAhmed->setSkills(['Ahmed skills']);
    print_r($devAhmed);

    // change mustafa, Ahmed won't get affected.
    $devMustafa->setSkills(['mustafa skills']);
    print_r($devMustafa);
    print_r($devAhmed);

  }

}

Testing::test();
