<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
	
	
		.form{
			margin-top:100px;
			padding:10px;
		}
	
		.form-control{
			
			margin: 10px;
		}
		#btn{

			margin:10px;
		}
	</style>
</head>
<body>
	<form class="form-group col-md-4 mx-auto" method="post" action="">

		<input type="text" class="form-control" id="exampleInputEmail1" name="fruitname" placeholder="Fruit Name">
		<input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Decription">
		<input type="file"  name="file" id="btn">	
		<br>
		<input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Selling Price">
		<input type="text" class="form-control" id="exampleInputEmail1" name="pur_price" placeholder="Purchase Price">
		<input type="text" class="form-control" id="exampleInputEmail1" name="quantity" placeholder="Quantity">
	  	<button type="submit" class="btn btn-primary" id="btn">Submit</button>
	</form>

	
		
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	  
	<?php	

		if (isset($_POST['submit'])){
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
				header("location:adminpanel.php");
				echo "record inserted successfully";
			}	
			else 
			{
				echo "Error : Could not able to execute";
				mysqli_error($query);
				
				mysqli_error($link);

			}
			mysqli_close($link);
			}
	?>  
<body>
<form>
  </body>
</html>