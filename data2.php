<?php



include("DB_controller.php");
session_start();

if( isset($_POST['txtusername']))
{	
	$username = $_POST['txtusername'];
	$password = $_POST['txtpassword'];
	//username and password sent from user
	$user = mysqli_real_escape_string($link, $username);
	$pass = mysqli_real_escape_string($link, $password);
	
	$sql = "SELECT * FROM u_registration WHERE Username = '$user' and Passwords = '$pass'";

	//$sql = "SElECT id FROM admin WHERE username = 'amar' and passcode = 'veer'";

	$result = mysqli_query($link,$sql);
	
	
	$count = mysqli_num_rows($result);
	
	//if result matched $myusername and $mypassword, table row must be 1 row
	
	if( $count == 1 )
	{
		
		
		$_SESSION['login'] = $username;
				
		header("location:index.php");
		echo"login successful";
	 	$query="Insert into login (Username,Password) values('$username','$password')";
		
		$Result = mysqli_query($link,$query);
	}
	else
	{	
		
		
		echo	 "Your login Name or Password is invalid";
	}
}
?>
