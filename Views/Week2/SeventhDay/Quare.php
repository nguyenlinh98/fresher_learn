<?php

namespace quare;

class Shape
{
    public $edge;

    public function __construct($edge)
    {
        $this->edge = $edge;
    }

    public function acreage()
    {
        return pow($this->edge, 2);
    }
}

//$quare = new Shape(3);
// echo "the edge is :".$quare->edge;
// echo"<br>";
//echo "the acreage is:" .$quare->acreage();
