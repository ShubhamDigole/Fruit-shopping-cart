<!-- 	
<br><br><br>
<br><br><br><br><br><br>
<?php
		include("navbar.php");
		$quantity = $_POST['quantity'];
		$id = $_SESSION['price'];
		echo $id;
		$query = "SELECT * FROM fruitdata WHERE id = '$id'";
		if($sql = mysqli_query( $link, $query )){
			
			
	
		$row = mysqli_fetch_array( $sql );
	
		$total = $quantity * $row[5];
		$user = $_SESSION['login'];
		echo $user;
		echo $row[1];
		echo $row[5];
		$insert = "INSERT INTO $user (Fruitname,Price) VALUES ('$row[1]','$row[5]')";
		if(mysqli_query($link,$insert)){
		
		//header("location:bill.php");
		}
		else{
			echo $user;
			echo "something wnt wrong";
		}	
			
		}

		else{
			
			echo "error";
		}
		
		?> -->