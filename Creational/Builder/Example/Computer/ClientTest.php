<?php


$simpleComputerBuilder = new SimpleComputerBuilder();
$director = new ComputerDirector($simpleComputerBuilder);
$mySimpleComputer = $director->makeComputer();

$director->changeBuilder(new CoolableComputerBuilder());
$myUpdatedComputer = $director->makeComputer();
