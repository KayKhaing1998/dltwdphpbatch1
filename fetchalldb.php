<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");


function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()>0){
        die("Connection Error");

    }else{
        return $db;
    }
}

// beautyprint(dbconnection());

// $query = "SELECT * FROM users";
// $query = "SELECT * FROM users WHERE id=5";
// $query = "SELECT * FROM users WHERE id!=5";
// $query = "SELECT * FROM users WHERE id>5";
// $query = "SELECT * FROM users WHERE id<5";
// $query = "SELECT * FROM users ORDER BY id DESC;
// $query = "SELECT * FROM users ORDER BY id ASC;
// $query = "SELECT * FROM users ORDER BY email DESC;
// $query = "SELECT * FROM users ORDER BY email ASC;
$query = "SELECT * FROM users WHERE id<5 ORDER BY id DESC";



function executequery($qry){
    $database = dbconnection();
    $results = mysqli_query($database,$qry);
    // if(mysqli_num_rows($results)>0){
    //     foreach($results as $result){
    //         echo "key is ${result['id']}" . " " ."result is ${result['email']}";
    //         echo "<br/>";
    //     }

    // }else{
    //     echo "NO Data";
    // }

    //while loop

    // if(mysqli_num_rows($results)>0){
    //     // $row = mysqli_fetch_assoc($results);
    //     // beautyprint($row);

    //     while($row = mysqli_fetch_assoc($results)){
    //         echo "Email is " .$row["email"]."<br>";
    //     }
    // }else{
    //     echo "No Data";
    // }

    //for loop
    if(mysqli_num_rows($results)>0){
        $i =0;
        for($i; $i < mysqli_num_rows($results); $i++){
            $row = mysqli_fetch_assoc($results);
            echo "id is ${row['id']}" . "email is ${row['email']}" . "<br>";
        }
    }else{
        echo "NO Data";
    }
    

    
}

executequery($query);


function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}

?>