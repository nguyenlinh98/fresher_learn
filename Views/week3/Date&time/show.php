<?php
 echo date('l \t\h\e jS');
 $date = "02/02/2019";
  var_dump(checkdate('02','02','2019'));

   echo $now  = date(' l d-M-Y');
    echo "\n";
$dt = new DateTime();
$dt->sub(new DateInterval('P1D'));
 $dt->format('F j, Y');
/**
 * get date time according to timezones
 *
 */
 date_default_timezone_set('Asia/Ho_Chi_Minh');
 echo  date('F d-m-Y H:i:s',time());

 /**
  * push day
  */
// date_modify($date,"+10d");
// ini_set('date.timezone','Asia/Ho_Chi_Minh');
// echo ($date('H:i:s'));
 //
$time = strtolower(date("l", strtotime('20/03/2019')));
if((strtolower(date("l", strtotime('20/03/2019')))== "saturday" )|| (strtolower(date("l", strtotime('20/03/2019'))) == "sunday"))
{
    echo  ' là vào ' .$time.' tức là ngày cuối tuần'."<br>";
}
else
{
    echo ' là vào ' .$time.' tức là không phải là ngày cuối tuần'."<br>";
}