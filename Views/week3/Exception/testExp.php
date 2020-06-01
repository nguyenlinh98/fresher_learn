<?php
function divide($number1, $number2)
{
    if($number2 ==0){
        throw new Exception("mau so phai khac 0");
    }
    else{
        return $number1/$number2;
    }
}
try{
     echo divide(2,0);
}
catch (Exception $exception){
    echo $exception->getMessage();
}