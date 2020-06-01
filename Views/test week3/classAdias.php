<?php
$a =5;
$b =12;
$c = 10;
$d =7;
$e =($a*$b)+$c*$d/$a;
echo $e;
/**
 * bai2
 *
 */
$fa = false;
if($fa = true){
    var_dump($fa);
}else{
    echo "false ";
}

for ($x =1; $x <=2; $x++){
    for($y =1; $y<= 3; $y++){
        if($x ==$y)continue;
        print($x."va".$y);
    }
}
$z =10 ;
while($z <10){
    $z--;
}
print "<br>". $z;
switch (1){
    case 1:print "kk";
    case 2:print "ll";
    default:print "xx";
}
$pizza  = "foo:*:1023:1000::/home/foo:/bin/sh";
$pieces = explode("foo", $pizza);
 echo "<br>";
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
 print_r($output = array_slice($input, 0, -4));  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"

class A {
    static $hello ="hi";
    static function hello(){
        print static ::$hello;
    }
}
 class B extends A{
    static $hello ="ll";
 }
 $b =new B();
$b::hello();