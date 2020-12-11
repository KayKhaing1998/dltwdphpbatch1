<?php
//Manual Array
$val1 = ["red","blue","black", "grey", "green"];
//Associative Array
$val2 = ["one"=>"this is post one", "two"=>"this is post two", "three"=>"this is post three", "four"=>"this is post four"];
//Multidimensional Array
$val3 = [
    ["name"=>"Aung Aung", "age"=>"20"],
    ["name"=>"Maung Maung", "age"=>"30"],
    ["name"=>"Mya Mya", "age"=>"28"],
    ["name"=>"Hla Hla", "age"=>"18"]
];

//var_dump
var_dump($val1);
echo "<hr/>";
var_dump($val2);
echo "<hr/>";
var_dump($val3);

//echo output
echo "<hr/>";
echo $val1[3];

echo "<hr/>";

echo $val2["one"];

echo "<hr/>";

echo $val3[2]["name"];

echo "<hr/>";

//foreach output for all arrays

//Manual Array
foreach($val1 as $data){
    echo $data. "<br/>";
}
echo "<hr/>";

//Associative Array
//value output
foreach($val2 as $ass){
     echo $ass. "<br/>";
}

echo "<hr/>";

//key and value output 
foreach($val2 as $key=>$value){
    // echo $key . "=>" . $value;
     echo $key. "<br/>";
     echo $value. "<br/>";
}


echo "<hr/>";

//Multidimensional Array
//value output
foreach($val3 as $multi){
    foreach($multi as $single){
        echo $single. "<br/>";
    }

}

echo "<hr/>";

//key and value output
foreach($val3 as $multi){
    foreach($multi as $a=>$b){
        echo $a. "<br/>";
        echo $b. "<br/>";
    }

}


?>