<?php
include('navbar.php');
//start the session to store values in sesssion storage
session_start();

	?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	
	<style type="text/css">
		body{
			background:url("./img/loginback.jpg");
			font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
			margin-top:150px;
		}
		
		form{
			/* border:2px solid red;;  */

		}
		.form-control{

			margin-top:10px;
		}
		#button{
			width: 100%;
			margin-top: -10px;
			
			font-weight: bold;
			margin-bottom: 10px;
			background:chocolate;
		}
		
		p{
			margin-bottom:10px;
			font-family:Times New Roman;
			color: antiquewhite;
			font-size: 20px;
			padding: 5px;
			text-align: center;
			height: 40px;
			background: #333333;
		}
		#link{
			font-weight: bold;
			color: white;
			text-decoration: none;
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>
</head>

<body>
					<form action="" method="post" class="from-group mx-auto col-md-4">
		
							<p>LOGIN</p>
									
						<input placeholder="Username" type="text" name="username" class="form-control" required>
						
						<input placeholder="Password" type="password" name="password" class="form-control" required>
						<br>
						<input id="button" name= "submit" type="submit" class="btn btn-primary" value="Submit"> 
						
						<a id="link" href="forgot_password.php">Forgot password?</a> <a id="link" href="Registration.php">Registration </a>
					</form>
					<!--<div style="font-size: 11px; color: #cc0000; margin-top: 10px"> </div>-->
				
		
		<?php

			

			//connection to database
			include("DB_controller.php");
			
			

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
								header("location:index.php");	
							//getting information from database to get if user is admin or not			
							
							$row = mysqli_fetch_array( $result );
							
							//store information if user is admin
							
							$_SESSION['admin'] = $row[11]; 
							$_SESSION['login'] = $username;
							$_SESSION['iduser'] = $row[0];
							
							
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

			if($_SESSION['login'] != null){

				?><script>
				window.location.href = 'index.php';
					</script>
				<?php
	
			}
		?>

</body>
</html>
