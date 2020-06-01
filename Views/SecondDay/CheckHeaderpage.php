<?php
    // check page is called http or https
  if(!empty($_SERVER['HTTPS'])){
       echo "trang dc goi tu https";
  }else{
      echo "trang dc goi tu http";
  }
   if ($_SERVER['HTTPS']== NULL){
       echo "xin chao";

   }
    else{
        echo 'hello';
    }

  ;
