<?php
$val1 = 'Kay Khaing Tun\'s';
$val2 = "Kay Khaing Tun\"s";
echo "{$val1}";
echo "{$val2}";

echo "<hr/>";

//statement function
$num1 = "Kay Kay";
if(is_string($num1)){
    echo "Your variable is String";
}

echo "<hr/>";
$num2 = 1234;
var_dump($num2);
if(is_numeric($num2)){
    echo "Your variable is Numeric";
}

echo "<hr/>";
$num3 = 20.5;
var_dump($num3);
if(is_float($num3)){
    echo "Your variable is Float";
}

echo "<hr/>";
$num4 = true;
var_dump($num4);
if(is_bool($num4)){
    echo "Your variable is Boolean";
}

echo "<hr/>";
$num5 = [1,2.5];
var_dump($num5);
if(is_array($num5)){
    echo "Your variable is Array";
}

echo "<hr/>";
$num6 = [];    //can use "";
var_dump($num6);
if(empty($num6)){
    echo "Your variable is Empty";
}

echo "<hr/>";
$num7 =12;
var_dump($num7);
if(is_int($num7)){
    echo "Your variable is Integer";
}

echo "<hr/>";
$num8 = NULL;
var_dump($num8);
if(is_null($num8)){
    echo "Your variable is null";
}




?>