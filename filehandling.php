<?php

//Create File
// $file = "fileserver/logs/test1.txt";
// $handler = fopen($file,"w");
// echo "file created";

//Read File
//Method 1(Binary data return, limited characters)
// $file = "fileserver/logs/test1.txt";
// $handler = fopen($file,"r");
//length
// $filesize = filesize($file);
// $data = fread($handler,$filesize);
// echo $data;

//Method 2(String data return, No limit)
// $file = "fileserver/logs/test1.txt";

// if(file_exists($file)){
//     $data = file_get_contents($file);
//     echo $data;
// }else{
//     echo "No file exist";
// }

//Write
// $file = "fileserver/logs/test1.txt";
// $handler = fopen($file,"w");
// fwrite($handler,"I Love Mandalay");
// fclose($handler);
// echo "Successful Write";

//Appending
$file = "fileserver/logs/test1.txt";
$handler = fopen($file,"a");
$message1 = "I Love Indonesia";
$message2 = "I Love Srilanka";
fwrite($handler,$message1);
fclose($handler);
echo "Successful Appending";





?>