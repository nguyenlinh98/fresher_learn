<?php
include("Quare.php");
include("Circle.php");

use Circle\Shape as Circ;

use quare\Shape as quar;

$shape = new Circ(4);
echo $shape->radius;

$quare = new quar(2);
echo $quare->acreage();


