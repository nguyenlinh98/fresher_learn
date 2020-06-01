<?php
$str = "Nguyễn Thị Linh@gmail.com";
$arr =" Thị Linh";
/**
 * find the postion of  first charater of substring in string
 */
 $check = strpos($str,$arr);
 if($check ==false){
     echo  "The string '$arr' was not found in the string '$str'";
 }
 else {
     echo "The string '$arr' found in the string '$str'";
 }
 /**
  * strlen get length str
  * strstr search first charater of string
  */
// echo strlen($str);
 if(strlen(strstr($str,$arr,false))>0){
     echo "$str ton tai chuoi $arr";
 }