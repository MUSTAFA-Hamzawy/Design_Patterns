<?php


$center = new Dot();
$center.move(5, 1);

$circle_1 = new Circle(5, $center);
$circle_1->move(8,1);

$circle_2 = new Circle(5, $center);
$circle_2->move(-5,5);

$circle_3 = new Circle(5, $center);
$circle_3->move(0,0);

$circle_4 = new Circle(5, $center);
$circle_4->move(1,4);

$group = new CompoundGraphic([]);
$group->add($circle_1);
$group->add($circle_2);
$group->add($circle_3);
$group->add($circle_4);

$group->move(1, 1);     // all circles will move to this point, and the group object doesn't need to know what is
// happening for circles of dots, it just calls circle's move

$group->draw();
