<?php	

		require_once("DB_controller.php");

			$NAME = $_POST['fruitname'];
			$DESCRIPTION = $_POST['description'];
			$URL = $_POST['file'];
			$PRICE = $_POST['quantity'];
			$QUANTITY = $_POST['price'];
		
		
		$query="INSERT INTO fruitdata(Name,Discription,ImgURl,Quantity,Price) VALUES ('$NAME','$DESCRIPTION','http://localhost/Fruit-shopping-cart/img/$URL',$QUANTITY,$PRICE)";

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