<?php

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;

    }

    public function acreage()
    {

        $accrege = pi() * pow($this->radius, 2);
        return $accrege;
    }

    public function perimeter()
    {
        $perimeter = 2 * pi() * $this->radius;
        return $perimeter;
    }

}

$cicle = new Circle(12);
echo($cicle->perimeter());