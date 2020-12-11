<?php

//1 Jan 1970
// $time = time();
// echo $time;

//Cookie
//setcookie(name,value,expiredtime,path,domain,security);

// function setmycookie(){
//     return setcookie("job1","we have to hire programmer",time()+3600,"/","",0);

// }

// setmycookie();
// echo "success";

// function deletecookie(){
//     if(isset($_COOKIE["job1"])){
//         return setcookie("job1","",time()-3600,"/","",0);
//     }else{
//         echo "there is no cookie";
//     }
    
// }
// deletecookie();

function getmycookie(){
    if(isset($_COOKIE["job1"])){
        return $_COOKIE["job1"];
    }else{
        return "There is no cookie sir, key number job1 does not exist";
    }
}
echo getmycookie();



?>