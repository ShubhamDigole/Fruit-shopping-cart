<?php	

		require_once("DB_controller.php");



		$FNAME = $_POST["fname"];
		$MNAME = $_POST["mname"];
		$LNAME = $_POST["lname"];
		$NAME = $FNAME. "," . $MNAME . "," . $LNAME;
		
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
		$USERNAME = $_POST["username"];
		$PASSWORDS = $_POST["pass"];
		
		
		$query="INSERT INTO u_registration(Username, Passwords, C_Name, Address, email, DOB, Gender, 				Age, Phone_no) VALUES ('$USERNAME','$PASSWORDS','$NAME','$ADD','$EMAIL','$DOB','$GENDER','$AGE','$PHONE')";

			if(mysqli_query($link,$query))
			{
				header("location:loginpage.php");
				echo "record inserted successfully";
			}	
			else 
			{
				echo "Error : Could not able to execute";
				mysqli_error($query);
			
				mysqli_error($link);

			}
  			mysqli_close($link);
		
?>