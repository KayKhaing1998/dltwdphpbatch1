<?php

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();

beautyprint($getdate);

echo "this is second = ". $getdate["seconds"]."<br/>";
echo "this is minutes = ". $getdate["minutes"]."<br/>";
echo "this is hours = ". $getdate["hours"]."<br/>";
echo "this is mday = ". $getdate["mday"]."<br/>";
echo "this is wday = ". $getdate["wday"]."<br/>";
echo "this is mon = ". $getdate["mon"]."<br/>";
echo "this is year = ". $getdate["year"]."<br/>";
echo "this is yday = ". $getdate["yday"]."<br/>";
echo "this is weekday = ". $getdate["weekday"]."<br/>";
echo "this is month = ". $getdate["month"]."<br/>";
echo "this is 0 = ". $getdate["0"]."<br/>";


$time = time();
echo "this is time stamp = ".$time;

echo "<hr/>";

// Date Time Format
$date = date("a",$time);
echo "this is format a = " . $date . "<br/>";

$date = date("A",$time);
echo "this is format A = " . $date . "<br/>";

$date = date("d",$time);
echo "this is format d = " . $date . "<br/>";

$date = date("F",$time);
echo "this is format F = " . $date . "<br/>";

$date = date("g",$time);
echo "this is format g = " . $date . "<br/>";

$date = date("G",$time);
echo "this is format G = " . $date . "<br/>";

$date = date("h",$time);
echo "this is format h = " . $date . "<br/>";

$date = date("H",$time);
echo "this is format H = " . $date . "<br/>";

$date = date("i",$time);
echo "this is format i = " . $date . "<br/>";

$date = date("l",$time);
echo "this is format l = " . $date . "<br/>";

$date = date("L",$time);
echo "this is format L = " . $date . "<br/>";

$date = date("m",$time);
echo "this is format m = " . $date . "<br/>";

$date = date("M",$time);
echo "this is format M = " . $date . "<br/>";

$date = date("n",$time);
echo "this is format n = " . $date . "<br/>";

$date = date("r",$time);
echo "this is format r = " . $date . "<br/>";

$date = date("s",$time);
echo "this is format s = " . $date . "<br/>";

$date = date("U",$time);
echo "this is format U = " . $date . "<br/>";

$date = date("y",$time);
echo "this is format y = " . $date . "<br/>";

$date = date("Y",$time);
echo "this is format Y = " . $date . "<br/>";

$date = date("z",$time);
echo "this is format z = " . $date . "<br/>";

echo "<hr/>";

$df = date("H:i:s",$time);
echo $df . "<br/>";
$df = date("H-i-s",$time);
echo $df . "<br/>";
$df = date("d/m/y",$time);
echo $df . "<br/>";
$df = date("D-M-Y",$time);
echo $df . "<br/>";
$df = date("Y/m/D",$time);
echo $df . "<br/>";
$df = date("d/m/Y H:i:s",$time);
echo $df . "<br/>";







function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}

?>