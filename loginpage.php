<?php



include("DB_controller.php");
session_start();

if( $_SERVER["REQUEST_METHOD"] == "post")
{	
	$username = $_POST[txtusername];
	$password = $_POST[txtpassword];
	//username and password sent from user
	$myusername = mysqli_real_escape_string($link, $username);
	$mypassword = mysqli_real_escape_string($link, $password);
	
	$sql = "SELECT id FROM u_registration WHERE Username = '$myusername' and Password = '$mypassword'";
	//$sql = "SElECT id FROM admin WHERE username = 'amar' and passcode = 'veer'";

	$result = mysqli_query($link,$sql);
	$row    = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];
	
	$count = mysqli_num_rows($result);
	
	//if result matched $myusername and $mypassword, table row must be 1 row
	
	if( $count == 1 )
	{
		session_register("txtusername");
		$_SESSION['login'] = $myusername;
		//header("location:welcome.php");		
		header("location:Registration.php");
		
		$query="Insert into login (Username,Password) values('$username','$password')";
	
	$Result = mysqli_query($link,$query);
	}
	else
	{	echo"error";
		$error = "Your login Name or Password is invalid";
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style type="text/css">
		body{
			font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
			margin-top: 220px;
		}
		label{
			font-family:arial;
			font-weight: bold;
			width: 100px;
			font-size: 14px;

		}

		input{
			
			border: 2px solid gray;
			padding: 5px;
			border-radius: 5px;
			width: 100%;
		}
		#button{
			width: 100%;
			margin-top: -10px;
			margin-left: 5px;
			font-weight: bold;
			margin-bottom: 10px;
			background:chocolate;
		}
		.Box{
			
			width: 400px;
			position: absolute;
			margin: auto;	
			margin-top: -100px;
			right:0;
			left: 0;
			
		} 
		.header{
			font-family:Times New Roman;
			color: antiquewhite;
			font-size: 20px;
			padding: 5px;
			text-align: center;
			height: 20px;
			background: #333333;
		}
		#link{
			font-weight: bold;
			color: black;
			text-decoration: none;
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>
</head>

<body>
	<div class="Box"> 
		<div style="width: 300px; border: solid 1px #333333; " align="left">
			<div class="header">
				<b>Login</b>
			</div>
				<div style="margin: 30px">
					<form action="" method="post">
						<p>
						
						  <input type="text" name="txtusername" placeholder="Username" required> <br><br>
						 
						  <input type="password" name="txtpassword" placeholder="Password" class="box" required> <br><br>
						  <input id="button" type="submit" value="Submit"> 

						</p>
						 <a id="link" href="forgot_password.php">Forgot password?</a> <a id="link" href="Registration.php">Registration </a>
					</form>
					<!--<div style="font-size: 11px; color: #cc0000; margin-top: 10px"> </div>-->
				
				</div>
		</div>
	</div>
	
</body>
</html>
