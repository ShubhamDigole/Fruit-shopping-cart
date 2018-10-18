<?php	
	//connecting database
	require_once("DB_controller.php");
	// hide all warnings
	error_reporting(E_ALL & ~E_NOTICE);
	include("navbar.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<style type= "text/css">
	body{

		background: url("./img/regback.jpg");
	}
	.head{
		margin-top:70px;
		text-align: center;
		padding: 10px;
		font-weight: bolder;
		font-size: 25px;
		}
		form{
			border-radius:10px;
			border:3px solid gainsboro;
			padding:10px;
			max-width:500px;
			
		}
		.form-control{
			transition: 1s all;
			background: rgba(0,0,0,0);
			color:white;
			margin-bottom:10px;
		}
		input[type=text]:focus {
			background: rgba(0,0,0,0);
		
		}
	label{
			color: white;
				
			margin-left:20px; 
		}
		.btn{
			
			
		}
	</style>
</head>

<body>
	<div class="head"> REGISTRATION</div>
		<form name="registration" method="post" action="" class="form-group mx-auto" >
	    <input placeholder="Full Name" type="text" name="fname" class="form-control">
	    <input placeholder="Address" type="textarea" name="address" class="form-control">  
	    <label>City : </label>
	    <select name="city" id="city" class="form-control">
		<?php
			$display = "SELECT * from cities";

			$sql = mysqli_query( $link, $display);
			
			while ( $row = mysqli_fetch_array( $sql ) ) {
		
				echo '<option value="'.$row[1].'">'.$row[1].'</option>';
			}
				
		
		?>
	     	
        </select>	
	    <!-- <input placeholder="District" type="text" name="district" class="form-control"> -->
	  	<label>State : </label>
	    <select name="state" class="form-control">
			<?php
				$display = "SELECT * from states";

				$sql = mysqli_query( $link, $display);
				
				while ( $row = mysqli_fetch_array( $sql ) ) {
			
					echo '<option value="'.$row[1].'">'.$row[1].'</option>';
				}
					
			
			?>
	    </select>
	  	<label>Country : </label>
	    <select name="country" class="form-control">
	      <option value="india">India</option>	
	      
	    </select>
	  	<label>DOB : </label>
	    <input placeholder="DOB" type="date" name="dob" class="form-control">
	    <input placeholder="Age" type="number" name="age" class="form-control">
		<label>Gender : </label>
		<input type="radio" name="gender" value="male"  <?php if(isset($gender) && $gender == "male") "checked";?> />Male
		<input type="radio" name="gender" value="female"  <?php if(isset($gender) && $gender == "female") "checked";?>> Female    
		<input placeholder="Email" type="email" name="email"class="form-control">    
		<input placeholder="Phone no" type="number" name="phoneno" class="form-control">
		<input placeholder="Username" type="text" name="username" class="form-control">
		<input placeholder="Password" onkeypress="myFunction()" id="password" type="password" name="pass" class="form-control">
		<!-- <input placeholder="Confirm Password" type="password" name="password" class="form-control"> -->  
		<label id="out"><label>		
		<input type="submit" name="submit" class="btn btn-primary " value="Submit"  >
		<input type="reset" name="Cancel" class="btn btn-danger " value="Reset">
			
	</form>
	<script>
		function myFunction(){
		var pass = document.getElementById("password").value;
		var out = document.getElementById("out");
		console.log(pass);
		//		out.innerHTML = pass;
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


		<?php	
			if (isset($_POST['submit'])) {
			//values eneterd from users
			$NAME = $_POST["fname"];
			$Date = date("Y-m-d");
			$ADDRESS = $_POST["address"];
			$CITY = $_POST["city"];
			$DISTRICT = $_POST["district"];
			$STATE = $_POST["state"];
			$COUNTRY = $_POST["country"];
			$AGE=$_POST["age"];
			$ADD = $ADDRESS . "," . $CITY . "," . $DISTRICT . "," . $STATE . "," . $COUNTRY;
			$DOB = $_POST["dob"];
			$GENDER = $_POST["gender"];
			$EMAIL = $_POST["email"];
			$PHONE = $_POST["phoneno"];
			$USERNAME = stripslashes($_REQUEST['username']);
			$user = mysqli_real_escape_string($link, $USERNAME);
			$PASSWORDS =  stripslashes($_REQUEST["pass"]);
			$pass = mysqli_real_escape_string($link, $PASSWORDS);
			$date = date('y-m-d');
			
			$sql = "SELECT * FROM u_registration WHERE Username = '$user'";
				
				//$sql = "SElECT id FROM admin WHERE username = 'amar' and passcode = 'veer'";
				
				$result = mysqli_query($link,$sql);
				
				
				$count = mysqli_num_rows($result);

				if($count == 0){
				// to create table of user to store his order history
				$create = "CREATE TABLE  $USERNAME (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Fruitname varchar(30) NOT NULL, Quantity INT(10), Price INT(30) NOT NULL, Total int(30) NOT NULL, Curdate DATE NOT NULL)";

				//store user info into registration table
				$query="INSERT INTO u_registration(Username, Passwords, C_Name, Address, email, DOB, Gender, Age, Phone_no, date) VALUES ('$user','$pass','$NAME','$ADD','$EMAIL','$DOB','$GENDER','$AGE','$PHONE', '$date')";
					
					//to check if create table of user is working
					if(mysqli_query($link,$create))
					{
						echo '<script> alert ("Registration successful please login to continue..")</script>';
			
						//to check if data is storring in database
						if(mysqli_query($link,$query))
						{	
								header("location:loginpage.php");
								
						}	
						else{

								mysqli_error($query);
						}
					}

					else 
					{
						echo "Error : Could not able to execute";
						mysqli_error($create);
						mysqli_error($link);

					}

				mysqli_close($link);
				}
			
			else{
				
			echo '<script> alert ("username not available plz try another username")</script>';

			}
			
		}
		
		//if user is logged in redirect to index page
		if($_SESSION['login'] != null){

			?><script>
			window.location.href = 'index.php';
				</script>
			<?php

		}

		?>
</body>
</html>

