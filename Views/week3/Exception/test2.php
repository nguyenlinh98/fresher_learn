<?php
 function Area($radius){
         if($radius <0){
             throw new Exception("bán kính phải là một số dương");
         }
          else
        return pi()*pow($radius,2);
    }
    $radius_arr =array(-3,3,-4);
    foreach ($radius_arr as $radius){
        try{
            echo "$radius have a area".Area($radius)."\n";
        }
        catch (Exception $e){
            echo "Caught Expection:",$e->getMessage(),"\n";

        }
//        try{
//            echo "$radius have area ".Area($radius);
//        }
//        catch (Exception $e){
//            echo 'Caught exception: ',  $e->getMessage(), "\n";
        function bar() {

            throw new Exception('Message from bar().');

        }

        function foo() {

            bar();

        }

        try {

            foo();

        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }



}
function bar() {

    throw new Exception('Message from bar().');

}

function foo() {

    bar();

}

try {

    foo();

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}