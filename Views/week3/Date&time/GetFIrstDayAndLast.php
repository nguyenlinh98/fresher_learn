<?php
$day =strtotime("2019-12-03");
 var_dump($month = date('m',$day));
 $lastday = "Last day in month is:\n";
  echo $firstday = "First day in month is 1<br>";
 if($month == "2"){
     echo "$lastday 28";
 }else if($month =="4"||$month == "6" || $month=="9"||$month =="11"){
     echo "$lastday 30";
 }
 else{
      echo $lastday."31";
 }
