<?php	

		require_once("DB_controller.php");



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
		
		$create = "CREATE TABLE  $USERNAME (id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Fruitname varchar(30) NOT NULL, Quantity INT(10), Price INT(30) NOT NULL, Total int(30) NOT NULL, Curdate DATE NOT NULL)";
		//$create = "CREATE TABLE '$USERNAME' ( 'id' INT(11) NOT NULL AUTO_INCREMENT , 'Fruitname' VARCHAR(30) NOT NULL , 'Quantity' INT(10) NOT NULL , 'Price' INT(30) NOT NULL , 'Total' INT(30) NOT NULL , 'Curdate' DATE NOT NULL";
		
		$query="INSERT INTO u_registration(Username, Passwords, C_Name, Address, email, DOB, Gender, Age, Phone_no, date) VALUES ('$user','$pass','$NAME','$ADD','$EMAIL','$DOB','$GENDER','$AGE','$PHONE', '$date')";
			if(mysqli_query($link,$create))
			{
				
			if(mysqli_query($link,$query))
			{	
				
				
					
					header("location:loginpage.php");
					
				
					
				
					// echo "table not create";
					// mysqli_error($create);
					
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
		
?>