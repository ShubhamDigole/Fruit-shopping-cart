<?php	

		require_once("DB_controller.php");

			$NAME = $_POST['fruitname'];
			$DESCRIPTION = $_POST['description'];
			$URL = $_POST['file'];
			$PRICE = $_POST['price'];
			$QUANTITY = $_POST['quantity'];
			$Purchase = $_POST['pur_price'];
		
		$query="INSERT INTO fruitdata(Name,Discription,ImgURl,Quantity,Price,pur_price) VALUES ('$NAME','$DESCRIPTION','http://localhost/Fruit-shopping-cart/img/$URL','$QUANTITY','$PRICE','$Purchase')";

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