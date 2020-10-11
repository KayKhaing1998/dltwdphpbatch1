<?php

$val ="white";
$vbl =$val; //assigning by reference
echo $vbl; 

echo "<hr/>";

#using reference variable
if($vbl=="red"){ 
    echo "my favorite color is red";
}else{
    echo "your favorite color is not red";
}

echo "<hr/>";

if($val=="red"){
    echo "my favorite color is red "."input value is ".$val;
}else{
    echo "your favorite color is not red "."but input value is ". $val;
}

echo "<hr/>";

if($val=="red"){
    echo "value color is ".$val;
}elseif($val=="white"){
    echo "value color is ".$val;
}else{
    echo "your color is ".$val;
}

echo "<hr/>";
 
//logical operator
$num1 = 10;
$num2 = 20;
$num3 = 0;

//Can also use "OR"
if($num1 > $num2 || $num1 > $num3){
    echo "true";
}else{
    echo "false";
}

echo "<hr/>";

if($num1 < $num2 && $num1 > $num3){
    echo "true";
}else{
    echo "false";
}

echo "<hr/>";

if(!$num1 < $num2){
    echo "true";
}else{
    echo "false";
}

echo "<hr/>";

switch($num1){
    case "10":
        echo "input value is ".$num1;
    break;

    case "20":
        echo "input value is ".$num1;
    break;

    default:
    echo "input value is not 10 and 20 "."value is ".$num1;
}


?>