<?php
//Kiểm tra xem IP có phải là từ Share Internet
    if(!empty($_SERVER['HTTP_HOST'])){
         $IP = $_SERVER['HTTP_HOST'];
    }else{
        $IP = $_SERVER['REMOTE_ADDR'];
    }
    echo $IP;