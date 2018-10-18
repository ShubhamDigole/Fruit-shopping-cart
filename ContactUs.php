 	
<?php
	include('navbar.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact us</title>
<link href="../../../Users/Admin/Documents/Unnamed Site 2/css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
	<style>
		body{
			background: url(img/contact.png); 
			background-size: cover;
		}
		
		.form-group{
			position: absolute;
			top:120;
			left: 0;
			right:0;
			padding: 20px;
			background: rgba(0,0,0,.1);
			margin: auto;
			
			border-radius: 10px;
		}
		.form-control{
			background:rgba(0,0,0,.1);
			margin-bottom: 10px;
		}
	</style>
</head>
<body><br><br>
	
		
	<form action="" method="post" name="contactus" class="form-group col-md-4">
	
		<input type="text" name="name" class="form-control" required placeholder="Name">
		<input type="text" name="email" class="form-control" required placeholder="Email Address">
		<input type="text" name="phoneno" class="form-control" required placeholder="Phone no">
			<input type="text" name="subject" class="form-control" required placeholder="Subject">
		<textarea class="form-control" name="msg" required placeholder="Write message here..."></textarea>
		<button type="submit" class="form-control btn btn-primary" name="submit" onclick="call()">Submit</button>

	</form>
	<script>
	function call(){

		alert ("thanks for contacting us we will reach at you as soon as possible"); 
	}
	</script>
	<?php
	if(isset($_POST['submit'])){
	
	
	require_once("DB_controller.php");
	$to = "shubhamdigole@gmail.com";
	$from = $_POST['email'];
	$name = $_POST['name'];
	$subject =$_POST['subject'];
	$number = $_POST['phoneno'];
//	$headers = "From:".$from;
	$headers = "From:".$from;
	$message = $_POST['msg'];
	$contact="INSERT INTO contactus(Name,Email,Phone,Subject,Message) VALUES ('$name','$from','$number','$subject','$message')";
	if(mysqli_query($link,$contact))
			{
				
				
					
	
		if(mail($from,$subject,$message,$headers)){
		header("location:ContactUs.php");
		echo "send successfully";
		}
		else{	
			echo $number;
			echo $message;
			echo "mail not sent";
		}

		}	
	else 
	{
		echo "Error : Could not able to execute";
		mysqli_error($contact);
		mysqli_error($link);
	}
	mysqli_close($link);
		
	
	
	}



	?>

</body>
</html>

