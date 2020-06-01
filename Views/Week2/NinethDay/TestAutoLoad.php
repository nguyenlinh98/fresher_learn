<?php
    //khai bao ham auto load
   function __autoload($name)
   {
        // check isset of file
       if (file_exists($name . ".php")) {
          include_once $name.".php";
       }
   }
    // tao doi tuong
class MyClass
{
}

class NotMyClass
{
}
$a = new NotMyClass();
 echo "instance of  use xac dinh ";
var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
    $connguoi =new Person();
   $trecon = new Children();