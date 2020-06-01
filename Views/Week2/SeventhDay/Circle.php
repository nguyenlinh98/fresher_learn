<?php
namespace Circle;
class Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;

    }

    public function acreage()
    {


        return pi() * pow($this->radius, 2);
    }

    public function perimeter()
    {
        return (pi()*2*$this->radius);
    }
    public function diameter(){
        return 2*$this->radius;
    }

}
