<?php
 class House{
     public $color;
     public $name;
     public function setData($color,$name){
         $this->color =$color;
         $this->name = $name;
     }
      public function __destruct()
      {
            echo "she is " . $this->name . ",whom have a " . $this->color . "house";
      }

 }
  $house =new House();
  $house->setData('blue',"linh linh");
