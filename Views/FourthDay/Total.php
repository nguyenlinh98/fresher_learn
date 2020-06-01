<?php
 function total()
 {
     $tong = 0;
     for ($i = 1; $i <= 20; $i++) {
         $tong = $tong + $i;
     }
     echo $tong;
 }
 total();