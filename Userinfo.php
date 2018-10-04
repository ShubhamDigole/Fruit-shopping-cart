<?php
include("navbar.php");
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
	<style>
		.container-fluid{
			width: 2000;
			margin-top: 20px;
			
			
		}
		
		.form-control{
			margin: 10px;
			width: 300px;
		}
		.container{
			float: left;
			/*margin-top: 10px;*/
			margin-left: 20px;
			background: rgba(185,175,175,1.00);
			border: thick;
			width: 400px;
			padding: 20px;
		}
	</style>
</head>

<body>
	
	<br>
	<div class="container-fluid">
		<div class="container col-sm-3">
			<form name="container1" method="get" action="" class="form-group col-md-4">
			<?php
			require_once("DB_controller.php");
			$user=$_SESSION['login'];
			$query="select * from u_registration where Username='$user'";
			$sql = mysqli_query($link,$query);
		
			$sql = mysqli_query($link,$query);

			$rows = mysqli_fetch_array($sql);
		?>
			<lable>Name : </lable><input type="text" name="name" class="form-control" value="<?php echo $rows[3] ?>">
			<lable>Username : </lable><input type="text" name="username" class="form-control" value="<?php echo $rows[1] ?>">
			<lable>Address : </lable><input type="text" name="address" class="form-control" value="<?php echo $rows[4] ?>">
			<lable>Email : </lable><input type="text" name="email" class="form-control" value="<?php echo $rows[5] ?>">
			<lable>Date of birth : </lable><input type="text" name="dob" class="form-control" value="<?php echo $rows[6] ?>">
			<lable>Phone No. : </lable><input type="text" name="phone" class="form-control" value="<?php echo $rows[9] ?>">
			<button type="submit" class="form-control btn btn-primary" name="submit">Edit</button>
			</form>

		</div>
		
		<div class="container col-sm-3" id="danger">
			<form name="container1" method="post" action="" class="form-group col-md-4">
			
			<lable>Name : </lable><input type="text" name="name" class="form-control">
			<lable>Username : </lable><input type="text" name="username" class="form-control">
			<lable>Address : </lable><input type="text" name="address" class="form-control">
			<lable>Email : </lable><input type="text" name="email" class="form-control">
			<lable>Date of birth : </lable><input type="text" name="dob" class="form-control">
			<lable>Phone No. : </lable><input type="text" name="phone" class="form-control">
			<button type="submit" class="form-control btn btn-primary" name="submit" onClick="save()">Save</button>
																					
			<?php
			function save(){
			require_once("DB_controller.php");
			$id = $_SESSION['login'] ;
			$user=$_SESSION['login'];
			$name=$_POST['name'];
			$username=$_POST['username'];
			$address=$_POST['address'];
			$email=$_POST['email'];
			$dob=$_POST['dob'];
			$phone=$_POST['phone'];
		
			$sql = "UPDATE u_registration SET C_Name='$name', Username='$username', DOB='$dob', Address='$address', email='$email', Phone_no='$phone' WHERE id='$id'"; 
	
			if(mysqli_query($link,$sql))
			{
				header("location:userinfo.php");
				echo "record inserted successfully";
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
