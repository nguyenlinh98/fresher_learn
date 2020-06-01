<?php
  function multiplication(){
      echo "<table border='1px '> 
                <tr>
            ";

              for($i =1; $i <10;$i++){
                     echo "<td>";
                  for ($j =1;$j<=10;$j++){
                      echo $i."x".$j."=".($i*$j);
                       echo"<br>";
                  }
                  echo "</td>";

              }

      echo "
                </tr>
             </table>";
  }
   multiplication();