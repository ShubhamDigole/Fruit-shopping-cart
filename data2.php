<?php



include("DB_controller.php");
session_start();

if( isset($_POST['username']))
{	
	$username = stripslashes($_REQUEST['username']);
	$password = stripslashes($_REQUEST['password']);
	
	//username and password sent from user
	
	 $user = mysqli_real_escape_string($link, $username);
	$pass = mysqli_real_escape_string($link, $password);
	

	$sql = "SELECT * FROM u_registration WHERE Username = '$username' and Passwords = '$password'";

	//$sql = "SElECT id FROM admin WHERE username = 'amar' and passcode = 'veer'";
	
	$result = mysqli_query($link,$sql);
	
	
	$count = mysqli_num_rows($result);
	
	//if result matched $myusername and $mypassword, table row must be 1 row
	
	if( $count == 1 )
	{
		
		
		
		$row = mysqli_fetch_array( $result );
		$_SESSION['admin'] = $row[11]; 
		$_SESSION['login'] = $username;
		echo $_SESSION['admin'];		
		header("location:index.php");
		echo"login successful";
	 	$query="Insert into login (Username,Password) values('$username','$password')";
		//echo $_SESSION['login'];
		$Result = mysqli_query($link,$query);
		
	}
	else
	{		
		echo	 "Your login Name or Password is invalid";
	}
}
?>
