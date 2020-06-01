<?php

namespace Circle;
class Shape
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function acreage()
    {
        return $this->height * $this->width;
    }
    public function perimeter()
    {
        return 2*($this->height +$this->width);
    }
}