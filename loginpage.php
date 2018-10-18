

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	
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
			border:2px solid gray;
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
		<div>
			<div class="header">
				<b>Login</b>
			</div>
				<div style="margin: 30px">
					<form action="" method="post">
						<p>
						
						  <input type="text" name="username" placeholder="Username" required> <br><br> 
						  <input type="password" name="password" placeholder="Password" class="box" required> <br><br>
						  <input id="button" type="submit" value="Submit"> 

						</p>
						 <a id="link" href="forgot_password.php">Forgot password?</a> <a id="link" href="Registration.php">Registration </a>
					</form>
					<!--<div style="font-size: 11px; color: #cc0000; margin-top: 10px"> </div>-->
				
				</div>
		</div>
	</div>
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

</body>
</html>
