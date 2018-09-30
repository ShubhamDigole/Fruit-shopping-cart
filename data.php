<?php	

		require_once("DB_controller.php");



		$NAME = $_POST["fname"];
		
		
		$Date = date("Y/m/d");
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
		echo $Date;

		$create = "CREATE TABLE  $USERNAME (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Fruitname varchar(30) NOT NULL, Quantity INT(10), Price INT(30) NOT NULL, Total int(30) NOT NULL),Date date()";
		$query="INSERT INTO u_registration(Username, Passwords, C_Name, Address, email, DOB, Gender, Age, Phone_no, date) VALUES ('$USERNAME','$PASSWORDS','$NAME','$ADD','$EMAIL','$DOB','$GENDER','$AGE','$PHONE','$Date')";
			if(mysqli_query($link,$create))
			{
				
				if(mysqli_query($link,$query))
			{	
				
				
					
					header("location:loginpage.php");
					
				
					 echo("Table created");
				
					// echo "table not create";
					// mysqli_error($create);
					
			}	
			
			}	
			else 
			{
				echo "Error : Could not able to execute";
				mysqli_error($query);
				
				mysqli_error($link);

			}
  			mysqli_close($link);
		
?>