<?php

$arr = ["one","two","three","four"]; //Manual Array

$name = []; //Declare
$name[0] = "Maung Maung";
$name[1] = "Aung Aung";
$name[2] = "Ko Ko";
$name[3] = "Zaw Zaw";
$name[4] = "Mya Mya";
echo $name[2];

echo "<hr/>";

$arr = ["name"=>"Aung", "age"=>"20"]; //Associative Array

$color = [];
$color["one"] = "red";
$color["two"]= "blue";
$color["three"] = "black";
$color["four"] = "white";
$color["five"] = "green";
echo $color["one"];

echo "<hr/>";

$arr = [
    ["name"=>"Kay Kay","age"=>"22"],
    ["name"=>"San San","age"=>"23"]
];

$x = [];
$x[0]["name"] = "Aung Aung";
$x[0]["age"] = "20";
$x[1]["name"] = "Mya Mya";
$x[1]["age"] = "30";
echo $x[1]["name"];
echo "<br/>";
echo $x[0]["age"];

?>