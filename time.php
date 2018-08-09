<?php
$time  = "8:30";


$d = strtotime($time);

echo $d;
echo "<br>";
$dateTime =  date("Y-m-d G:i:s",$d);
echo $dateTime;
echo "<br>";
echo $time;

?>