<?php

//Useful Function

//Number Format
$num = 1230000;
echo number_format($num);
echo "<br/>";
echo number_format($num,"2");
echo "<br/>";
echo number_format($num,"2","/","-");
echo "<br/>";

//chunk-split
$b = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
echo chunk_split($b,5,"/");
echo "<br/>";

//lcfirst
echo lcfirst("This is lcfirst = Lorem Ipsum is simply dummy text of the printing and typesetting industry");
echo "<br/>";
//ucwords
echo ucwords("This is ucwords = Lorem Ipsum is simply dummy text of the printing and typesetting industry");
echo "<br/>";

echo strtoupper("This is strtoupper = Lorem Ipsum is simply dummy text of the printing and typesetting industry");
echo "<br/>";

echo strtolower("This is strtolower = Lorem Ipsum is simply dummy text of the printing and typesetting industry");
echo "<br/>";

$name = " Aung Aung ";
echo strlen($name);
echo "<br/>";


//trim
echo trim($name);
echo "<br/>";
echo strlen(trim($name));
echo "<br/>";
echo trim("/ Aung Aung / Maung Maung / Kyaw /","/");
echo "<br/>";

//ltrim = left trim
echo strlen(ltrim($name));
echo "<br/>";
echo ltrim("/ Aung Aung /","/");
echo "<br/>";

//rtrim = right trim
echo strlen(rtrim($name));
echo "<br/>";
echo rtrim("/ Aung Aung /","/");

echo "<br/>";

//Start CRYPT
//SHA1 true = raw 20 chars binary format, false = raw 40 chars hex number
$password = "123456";
echo sha1($password);
echo "<br/>";
echo sha1($password,true);
echo "<br/>";
echo sha1($password,false);
echo "<br/>";

//MD5 true = raw 16 chars binary format, false = raw 32 chars hex number
echo md5($password);
echo "<br/>";
echo md5($password,true);
echo "<br/>";
echo md5($password,false);
echo "<br/>";

//crypt
echo crypt($password,"dlt");
echo "<br/>";
echo crypt($password,true);
echo "<br/>";
echo crypt($password,false);
echo "<br/>";

echo  md5(sha1(crypt($password,"dlt")));
echo "<br/>";

$z = "i love mandalay , because mandalay is my hometown";
echo strpos($z,"mandalay");
echo "<br/>";

echo strrpos($z,"mandalay");
echo "<br/>";

echo stripos($z,"Mandalay");
echo "<br/>";

echo strripos($z,"Mandalay");
echo "<br/>";

// echo strripos($z,"Man");
// echo "<br/>";

echo substr_replace("Hello world","Mandalay",6);
echo "<br/>";

echo str_word_count($z);
echo "<br/>";
echo "<hr/>";

//Array as Object
$myarr = ["name"=>"maung maung","age"=>20,"address"=>"mandalay","phone"=>"09977453780"];
echo json_encode($myarr);
echo "<br/>";

$myarr2 = [
    ["name"=>"maung maung","age"=>20,"address"=>"mandalay","phone"=>"09977453780"],
    ["name"=>"zaw zaw","age"=>22,"address"=>"mandalay","phone"=>"09977453780"],
    ["name"=>"kyaw kyaw","age"=>30,"address"=>"mandalay","phone"=>"09977453780"]
];

echo json_encode($myarr2);





?>