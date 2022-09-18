<?php

use DesignPatterns\Structural\Decorator\BluePaintingDecorator;
use  DesignPatterns\Structural\Decorator\Car;
use DesignPatterns\Structural\Decorator\Paint;
use DesignPatterns\Structural\Decorator\RedPaintingDecorator;

$car = new Car();
$painter = new Paint();   // car now is transparent ( no color )
$painter = new RedPaintingDecorator($painter);
$painter->paint($car);    // car's color now is Red
$painter = new BluePaintingDecorator($painter);
$painter->paint($car);    // car's color now is Blue