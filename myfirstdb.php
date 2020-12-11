<?php

//Create DB Access
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");

//Connection to DB and check error
//mysqli_connect(host,username,password,dbname);
function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    // return $db;
    // echo mysqli_connect_errno() > 0 ? "Connection error" :"Connection success";
    if(mysqli_connect_errno() > 0){
        // echo "Connection Error";
        die("Connection Failed");
    }else{
        // echo "Connection Success";
        return $db;
    }
}



// beautyprint(dbconnection());
// dbconnection();

//1 Database (successful)
// $database = dbconnection();

//2 Query (Table)
$query = "SELECT * FROM users";

//3 Connect to Database and Query
// $results = mysqli_query($database,$query);

// beautyprint($result);

// if(mysqli_num_rows($results) > 0){
//     foreach($results as $result){
//         foreach($result as $key=>$value){
//             echo "Key is {$key} " . "Value is {$value}" . "<br/>";
//         }
//     }
// }else{
//     echo "No Data";
// }

function executequery($qry){
    $database = dbconnection();
    $results = mysqli_query($database,$qry);
    if(mysqli_num_rows($results) > 0){
    foreach($results as $result){
        foreach($result as $key=>$value){
            echo "Key is {$key} " . "Value is {$value}" . "<br/>";
             }
        }
        }else{
            echo "No Data";
        }
}

executequery($query);




function beautyprint($array){
    echo "<pre>" . print_r($array,true) . "</pre>";
}

?>