<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
}

require_once("menu.php");
?>

<!DOCTYPE html>
<html>
<head><title>Private page</title>

<style>

div{
    background-image:url(images.jpeg);
    width:100%;
    height:500px;
    text-align:center;

}

</style>

</head>
<body>
<div>
<h3>This is private area</h3>
</div>

</body>
</html>