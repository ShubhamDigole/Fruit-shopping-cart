<?php	

		require_once("DB_controller.php");

			$NAME = $_POST['fruitname'];
			$DESCRIPTION = $_POST['description'];
			$URL = $_POST['file'];
			$PRICE = $_POST['quantity'];
			$QUANTITY = $_POST['price'];
		
		
		$query="INSERT INTO fruitdata(Name,Discription,ImgURl) VALUES ('$NAME','$DESCRIPTION','http://localhost/Fruit-shopping-cart/img/$URL')";
	//	$query="INSERT INTO u_registration (Username, Passwords, C_Name, Address, email, DOB, Gender, 				Age, Phone_no) VALUES ('$USERNAME','$PASSWORDS','$NAME','$ADD','$EMAIL','$DOB','$GENDER','$AGE','$PHONE')";
			if(mysqli_query($link,$query))
			{
				header("location:fruitinsert.php");
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