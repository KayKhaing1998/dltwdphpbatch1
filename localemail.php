<?php

$to = "myamya@localhost";
$subject = "Happy Birthday Naww";
$message = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s";
// $header = "From:sale@dlt.com\r\n"."Content-Type:text/plaintext";
$header = "From:sale@dlt.com\r\n"."Content-Type:text/html";



//Single Send //Multi Send
function sendmail($to,$sub,$msg,$header){
    $mail = mail($to,$sub,$msg,$header);
    if($mail){
        echo "Send Successfully";
    }else{
        echo "Send Failed";
    }
}

// sendmail($to,$subject,$message,$header);

$myarrs = [
    ["id"=>1, "email"=>"aungaung@localhost", "password"=>"asdfgh"],
    ["id"=>2, "email"=>"maungmaung@localhost", "password"=>"asdfgh"],
    ["id"=>3, "email"=>"susu@localhost", "password"=>"asdfgh"],
    ["id"=>4, "email"=>"myamya@localhost", "password"=>"asdfgh"]
];

// echo count($myarrs);

//Multi Send
foreach($myarrs as $data){
    $to = $data["email"];
    sendmail($to,$subject,$message,$header);
}



?>
