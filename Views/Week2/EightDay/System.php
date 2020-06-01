<?php
namespace linhcreate;

class System
{
     private $height;
     private $width;

     public function __construct($height,$width)
     {
         $this->width = $width;
         $this->height = $height;
     }
     public function area(){
         return $this->height*$this->width;
     }

}