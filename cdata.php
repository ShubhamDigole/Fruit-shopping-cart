<?php
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
		
?>