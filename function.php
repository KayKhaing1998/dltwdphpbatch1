<?php

//function functionname(){}

//Simple Function
function myfun(){
    echo "My name is function";
}
myfun();

echo "<hr/>";

function hellocal(){
    $num1=100;
    $num2=20;
    $cal=$num1/$num2 + (5+5);
    echo $cal;
}
hellocal();

echo "<hr/>";

//parameter passing to function
function singleparameter($name){
    echo "My name is {$name}";
}

singleparameter("Kay");

echo "<hr/>";

function multiparameter($name,$age){
    echo "My name is {$name}. My age is {$age}";
}
multiparameter("Kay Kay", 22);

echo "<hr/>";

function multical($val1,$val2,$val3){
    $cal = ($val1+$val2)*$val3;
    echo $cal;
}
multical(10,20,30);

echo "<hr/>";

//default parameter
function defaultparameter($name="Mya Mya"){
    echo "My name is {$name}";
}
defaultparameter();

echo "<br/>";

function defaultpp($num1=20,$num2=10,$num3=2){
    $cal = ($num1+$num2)/$num3;
    echo $cal;
}
defaultpp();

echo "<hr/>";

//return value
//simple function

function simplereturn(){
    return "My name is return function";
}
echo simplereturn();

echo "<hr/>";

function singlereturn($num1){
    $cal = $num1+200;
    return $cal;
}
echo singlereturn(40);

echo "<hr/>";

function multireturn($num1,$num2,$num3){
    $cal = ($num2+$num3)*$num1;
    return $cal;
    //return $num1;
}
echo multireturn(10,20,30);

echo "<hr/>";

//dynamic funtion call
$val ="greeting";
echo $val;
echo "<hr/>";

function greeting(){
    return "Hello I am Myanmar";
}
echo greeting();
echo "<hr/>";

echo $val;
echo "<br/>";
echo $val(); //dynamic

echo "<hr/>";

$num1 = "doit";
function doit(){
    return "We Love Kwe Phyo";
}
//echo $num1();

if(function_exists($num1)){
    echo "Yes, your variable had used in function";
}else{
    echo "No, your variable is not in function";
}




?>