<?php

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");

function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    // return $db;

    if(mysqli_connect_errno() > 0){
        die("Connection Failed");
    }else{
        return $db;
    }

}

// $database = dbconnection();
// $query = "SELECT * FROM users";
// $result = mysqli_query($database,$query);
// if(mysqli_num_rows($result)>0){
//     foreach($result as $data){
//         foreach($data as $key=>$value){
//             echo "Key is {$key} " . "Value is {$value}"."<br/>";
//         }
//     }
// }else{
//     echo "No Data";
// }


// function executequery($qry){
//     $database = dbconnection();
//     $result = mysqli_query($database,$qry);
//     if(mysqli_num_rows($result)>0){
//         foreach($result as $data){
//             foreach($data as $key=>$value){
//                 echo "Key is {$key} " . "Value is {$value}"."<br/>";
//             }
//         }
//     }else{
//         echo "No Data";
//     }
// }

// executequery($query);

// beautyprint(dbconnection());
// dbconnection();

//fetching single database

// function fetchsingledata($id){
//     $database = dbconnection();
//     $query = "SELECT * FROM users WHERE id != $id";
//     $result = mysqli_query($database,$query);

//     if(mysqli_num_rows($result)>0){
//         foreach($result as $data){
//             echo $data['id']."<br/>";
//             echo $data['email']."<br/>";
//             echo $data['password']."<br/>";
//             echo $data['created_at'];
//         }
//     }
// }

// fetchsingledata(3);


//Insert single Database
// $query = "INSERT INTO users VALUES(0,'nunu@gmail.com','123456','2020-11-29')";

// $query ="INSERT INTO users (email,password,created_at) VALUES('hlahla@gmail.com','123456','2020-11-29')"; 
// function singleinsert($qry){
//     $database = dbconnection();
//     $result = mysqli_query($database,$qry);
    
//     if(mysqli_insert_id($database)>0){
//         echo "single data inserted";
//     }else{
//         echo "failed";
//     }
// }

// singleinsert($query);






function beautyprint($array){
    echo "<pre>".print_r($array,true)."</pre>";
}

?>