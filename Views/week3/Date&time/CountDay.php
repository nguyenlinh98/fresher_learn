<?php
$birthday = "12-07-2019";
  $now = strtotime(date('d-m-Y'));
  $count = (strtotime($birthday)-$now)/60/60/24;
  if($count == 0){
      echo "Happy birthday me";
  }
   echo "Comming soon";

