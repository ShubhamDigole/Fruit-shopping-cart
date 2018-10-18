<?php
include("navbar.php");
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>user info</title>
	<style>
		
		body{

		background: url("./img/profileback.jpg");
		}
		.container-fluid{
			
			margin-top: 20px;
			
			
		}
		
		.form-control{
			margin: 10px;
			width: 300px;
		}
		.container{
			height:80%;
			float: left;
			/*margin-top: 10px;*/
			margin-left: 20px;
			background: rgba(0,0,0,.1);
			border: thick;
			
			padding: 20px;
		}
		lable{

			color:white;
		}

		#data{
			font-family:arial;
			color:white;
			width:200PX;
			font-size:16px;
			font-weight:bolder;
			
		}
	</style>
</head>

<body>
	
	<br>
	<div class="container-fluid col-md-12">
		<div class="container col-md-5">
			
			<?php
			require_once("DB_controller.php");
			$user=$_SESSION['login'];
			$query="select * from u_registration where Username='$user'";
			$sql = mysqli_query($link,$query);
		
			$sql = mysqli_query($link,$query);

			$rows = mysqli_fetch_array($sql);
		?>
			<lable>Name : </lable><p id="data"><?php echo$rows[3] ?></p>
			<lable>Username : </lable><p id="data"><?php echo$rows[1] ?></p>
			<lable>Address : </lable><p id="data"><?php echo$rows[4] ?></p>
			<lable>Email : </lable><p id="data"><?php echo$rows[5] ?></p>
			<lable>DOB: </lable><p id="data"><?php echo$rows[6] ?></p>
			<lable>Phone No. : </lable><p id="data"><?php echo $rows[9] ?></p>
						

		</div>
		
		<div class="container col-md-5" id="danger">
			<form name="container1" method="post" action="" class="form-group col-md-4">
			
			<lable>Name : </lable><input type="text" name="name" class="form-control">
		<!-- <lable>Username : </lable><input type="text" name="username" class="form-control"> -->
			<lable>Address : </lable><input type="text" name="address" class="form-control">
			<!-- <lable>Email : </lable><input type="text" name="email" class="form-control"> -->
			<lable>Date of birth : </lable><input type="date" name="dob" class="form-control">
			<!-- <lable>Phone No. : </lable><input type="text" name="phone" class="form-control"> -->
			<button type="submit" class="form-control btn btn-primary" name="submit" onClick="save()">Save</button>
																					
			<?php
			if(isset($_POST['submit'])){
			require_once("DB_controller.php");
			$id = $_SESSION['login'] ;
			$user=$_SESSION['login'];
			$name=$_POST['name'];
			$username=$_POST['username'];
			$address=$_POST['address'];
			$email=$_POST['email'];
			$dob=$_POST['dob'];
			$phone=$_POST['phone'];
		
			$sql = "UPDATE u_registration SET C_Name='$name', DOB='$dob', Address='$address' WHERE id='$id'"; 
	
			if(mysqli_query($link,$sql))
			{
				?>

				<script>
				alert(" changes updated successfully");
				</script>
				<?php
			}	
			else 
			{
				echo "Error : Could not able to execute";
				mysqli_error($sql);
				
				mysqli_error($link);

			}
  			mysqli_close($link);
			}
			?>
			</form>
		</div>
		
	</div>
	
</body>
</html></div>
