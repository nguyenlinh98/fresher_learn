<?php
$birthday = strtotime("12-07-2019");
$nowday = strtotime(date('d-m-Y'));
$minute = ($birthday-$nowday)/60;
$hour = ($birthday-$nowday)/60/60;
$day = ($birthday-$nowday)/60/60/24;
 echo "birthday will  happen  in :".$day." day /".$hour." hour / ".$minute." minute";
