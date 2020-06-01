<?php
  $string ="Thanh Huyen";
  $count = 0;
  for ($i =0 ;$i <= strlen($string); $i++){
      if($string[$i]=='n'){
           $count ++;
      }
//       echo  $count;
  }
    echo "String ".$string." have ".$count." n characters";
