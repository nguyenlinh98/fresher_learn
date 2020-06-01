<?php
// count line in file
    $file = basename($_SERVER['PHP_SELF']);
    $cont = count(file($file));
     echo  "Line in ".$file." is:".$cont;
