<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logoutform.php">Logout</a></p>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>My Calculator</title>
	<style type="text/css">

		/*div{
			background-color: #cce6ff;
			width: 50%;
			margin-left: 400px;
			height: 500px;
			border-radius: 100px 0px 100px 0px;
			margin-top: 50px;
		}
*/		
		body{
			background-image: url(img/wall2.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
		table{
			text-align: center;
			background-color: pink;
			padding: 60px;
			border-radius: 15px;
			margin-top: 30px;
			margin-left: 900px;
			/*width:300px;
			height: 600px;*/
			
		}

		input[type="button"]{
			border-radius: 5px;
			background-color:#ff99ce;
			color: black;
			border-color:#ff4456 ;
			width:50px;
			outline: none;
			border-style: none;
			text-align: center;
			height: 50px;
			font-weight: bold;
		}
		input[type="button"]:hover{
			background-color: white;
		}

		input[type="text"]{
			border-radius: 5px;
			text-align: right;
			background-color:white;
			border-color: black ;
			width:98%;
			outline: none;
			border-style: none;
			height: 50px;
			font-weight: bold;
			font-size: 20px;
        }
        .form {
    /* margin: 10px; */
    width: 100%;
    /* padding: 5px 0px; */
    /* background: pink; */
    text-align: center;
    font-size:30px;
    
}

	</style>
</head>
<body>
    <div class="form">
        <p style="text-align:right; font-size: 25px;" ><a href="logoutform.php">Logout</a></p>
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        
        <p>You are now a member of my page</p>
        
    </div>
	<div>
		
	<table align="center">
		<tr>
			<td colspan="5"><input type="text" name="result" id="result"></td>
		</tr>
		<tr></tr><tr></tr><tr></tr>
		
		<tr>
			<td><input type="button" name="seven" id="seven" value="7" onclick="display('7')"></td>
			<td><input type="button" name="eight" id="eight" value="8" onclick="display('8')"></td>
			<td><input type="button" name="nine" id="nine" value="9" onclick="display('9')"></td>
			<td><input type="button" name="add" id="add" value="+" onclick="display('+')"></td>
			<td><input type="button" name="clear" id="clear" value="C" onclick="clr()"></td>
		</tr>
		<tr>
			<td><input type="button" name="four" id="four" value="4" onclick="display('4')"></td>
			<td><input type="button" name="five" id="five" value="5" onclick="display('5')"></td>
			<td><input type="button" name="six" id="six" value="6" onclick="display('6')"></td>
			<td><input type="button" name="sub" id="sub" value="-" onclick="display('-')"></td>
			<td rowspan="3"><input type="button" name="equal" id="equal" value="=" onclick="solve()" style="height: 160px;"></td>
		</tr>
		<tr>
			<td><input type="button" name="one" id="one" value="1" onclick="display('1')"></td>
			<td><input type="button" name="two" id="two" value="2" onclick="display('2')"></td>
			<td><input type="button" name="three" id="three" value="3" onclick="display('3')"></td>
			<td><input type="button" name="multiply" id="multiply" value="*" onclick="display('*')"></td>
			
		</tr>
		<tr>
			<td><input type="button" name="zero" id="zero" value="0" onclick="display('0')"></td>
			<td><input type="button" name="point" id="point" value="." onclick="display('.')"></td>
			<td><input type="button" name="mod" id="mod" value="/" onclick="display('/')"></td>
			<td><input type="button" name="div" id="div" value="%" onclick="display('%')"></td>
			
		</tr>

	</table>
	</div>
    

	
	

</body>
<script type="text/javascript">
	function display(val){ 
             document.getElementById("result").value +=val;
         }

    function solve(){ 
             let x = document.getElementById("result").value;
             let y = eval(x); 
             document.getElementById("result").value = y; 
         } 

    function clr(){ 
             document.getElementById("result").value = "";
         }  


</script>
</html>