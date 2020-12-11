<?php
//Variable Scope
$val =20; //Global Variable 

function variablescope(){
    $num=10; //Local Variable
    echo $num;
}

echo $val;
echo "<br/>";
variablescope();

//echo $num; local variable does not work in outside

echo "<hr/>";
$x = 50;
$y = 100;

function vscope(){
    global $x;
    global $y;
    $z = $x+$y;
    echo $z;
}

echo $x;
echo "<br/>";
vscope();
echo "<hr/>";

//Static Variable
function staticvariable(){
    STATIC $val=0;
    $val++;
    echo $val;
}
staticvariable();
echo "<br/>";
staticvariable();
echo "<br/>";
staticvariable();
echo "<hr/>";

//playing variable
$num = 20;
$num2 = 50;

function myvalue(&$num){
    $num = 40;
    echo $num;
}

echo "this is first value from global num {$num}";
echo "<br/>";
echo "this is first value from global num2 {$num2}";
echo "<br/>";
myvalue($num2);
echo "<br/>";
echo "this is second value from global {$num}";
echo "<br/>";
echo "this is second value from global num2 {$num2}";

echo "<hr/>";

$num=20;
function myvalue1(&$val){
    $val=40;
    echo $val;
}
echo "this is first value from global num {$num}";
echo "<br/>";
myvalue($num);
echo "<br/>";
echo "this is second value from global num {$num}";

?>