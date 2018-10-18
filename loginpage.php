

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
						
					
						<input placeholder="Username" type="text" name="username" class="form-control" required>
						<br><br>
						<input placeholder="Password" type="password" name="password" class="form-control" required>
						<br><br>
						<input id="button" name= "submit" type="submit" class="btn btn-primary" value="Submit"> 
						
						<a id="link" href="forgot_password.php">Forgot password?</a> <a id="link" href="Registration.php">Registration </a>
					</form>
					<!--<div style="font-size: 11px; color: #cc0000; margin-top: 10px"> </div>-->
				
				</div>
		</div>
	</div>
		<?php


			//connection to database
			include("DB_controller.php");
			
			//start the session to store values in sesssion storage
			session_start();

			// call the function on clicking to submit button
			if( isset($_POST['submit']))
			{	
				$username = stripslashes($_REQUEST['username']);
				$password = stripslashes($_REQUEST['password']);
				
				//username and password sent from user
				
				$user = mysqli_real_escape_string($link, $username);
				$pass = mysqli_real_escape_string($link, $password);
				

				$sql = "SELECT * FROM u_registration WHERE Username = '$user'";
				
				//$sql = "SElECT id FROM admin WHERE username = 'amar' and passcode = 'veer'";
				
				$result = mysqli_query($link,$sql);
				
				
				$count = mysqli_num_rows($result);
				
				//if result matched $myusername and $mypassword, table row must be 1 row
				
				if( $count == 1 )
				{	
					$sql2 = "SELECT * FROM u_registration WHERE Username = '$user' and Passwords = '$pass'";
					
					$result2 = mysqli_query($link,$sql2);
				
				
					$count2 = mysqli_num_rows($result2);
				
					//if result matched $myusername and $mypassword, table row must be 1 row
					
							if( $count2 == 1 )
							{	
								
							//getting information from database to get if user is admin or not			
							
							$row = mysqli_fetch_array( $result );
							
							//store information if user is admin
							
							$_SESSION['admin'] = $row[11]; 
							$_SESSION['login'] = $username;
							echo $_SESSION['admin'];		
							header("location:index.php");
							echo"login successful";
							$query="Insert into login (Username,Password) values('$username','$password')";
							
							$Result = mysqli_query($link,$query);
							}

							else {
								echo	 '<script> alert ("Your Password is invalid")</script>';
							}
				}
				else
				{		

					mysqli_error($sql);
					echo	 '<script> alert ("Your Username is invalid")</script>';
				}
			}
		?>

</body>
</html>
