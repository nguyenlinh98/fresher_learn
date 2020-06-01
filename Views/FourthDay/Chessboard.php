<?php
 echo "<table border='1px '>";
 for($i =1 ; $i<=8 ;$i++){
     echo "<tr>";
     for($j =1; $j <=8; $j++){
         $total =$i+$j;
          if($total%2 ==0){
              echo "<td style='background: black'; width ='100px'; height='100px'>";
          }
           else{
               echo "<td style='background: white'; width ='100px';height='100px'>";
           }
     }
      echo "</tr>";
 }
  echo "</table>";