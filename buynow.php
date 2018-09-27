<?php
include("navbar.php");	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	#etc{
	
	margin-top:100px;	
	}
		.container-fluid{
			
			position: relative;
			margin: auto;
			right: 0;
			left: 0;
		}
		.card{
			
			
			border-right:1px solid #C3BFBF;
		}
		.line{
			margin-left: 10px;
			border:2px solid #C3BFBF;
		}
		#danger{
			margin-top:10px;
			border:1px solid red;
			font-size:12px;
			color:red;
			margin-top:-30px;
			margin-left:100px;
			display:none;
		}
		.btn{
			margin-top:-10px;
			border:1px solid red;
		}
		#image{
			
			height: 300px;
		}
		</style>
</head>	
	
<body>

	<br><br><br><br>
	
	<?php
	$id = $_GET['link'];
	if($id == null){
		?><script>
			window.location.href = 'index.php';
					</script>
		<?php
		
	}
	$query = "SELECT * FROM fruitdata WHERE id = '$id'";
	$sql = mysqli_query( $link, $query );
	$count = mysqli_num_rows($sql);
	$row = mysqli_fetch_array( $sql );	
	$_SESSION['id']=$row[0];
		?>
<div class="container-fluid row col-md-11">
	
	
	<div class="card col-md-4"> <img class="card-img-top" id="image" src="<?php echo $row[3]?>" alt="Card image cap">
	</div>
	<div class="line"></div>
	<div class="container col-md-6">
		<h3>Fruit Name: <?php echo $row[1];?> </h3>
		<h4>Price: <?php echo $row[5];?> ₹ </h4>
		<h4 id="qty">Available: <?php echo $row[4];?> Kg </h4>
		
		<form action="" method="post">

			<h4>Enter Quantity:<input type="number" onkeypress="myFunction()" id="qty" name="quantity" class="form-control col-md-2" required>
			<p id="danger">Please enter proper Auantity</p>
			
			<br>
			<input type="submit" class="btn btn-primary"onclick="data()">	
		</form>
		</div>
			
	
	</div>
	<br>
	<div class="container-fluid col-md-11">
	<H3>Description:</H3>
	<p><?php echo $row[2];?></p>
	</div>
	
	

	
		
	
			
		<?php	
		if($row[4]<25){

			?>
			<script>
			var b =	document.getElementById('qty');
			b.innerHTML = "Very Few Left: <?php echo $row[4]?> Kg";
			b.style.color = "red";
			</script>
			<?php
		}
		$quantity = $_POST['quantity'];
		$price = $row[5];
		$total = $price * $quantity;
		$user = $_SESSION['login'];
		$datai = "INSERT INTO $user (Fruitname,Quantity,Price,Total) VALUES ('$row[1]','$quantity','$price','$total')";
		

		if($quantity != 0){
		if(mysqli_query($link,$datai))
		{
		
		if($quantity<$row[4]){
		$newQuantity = $row[4] - $quantity;
		$insert = "UPDATE `fruitdata` SET `Quantity` = '$newQuantity' WHERE `fruitdata`.`id` = $row[0]";
			
		if(mysqli_query($link,$insert)){
		?><script>
			window.location.href = 'bill.php';
					</script>
		<?php
		fflush($datai);
			}

			else{

				
			}
		}
		else{
			?>
			<script> document.getElementById('danger').style.display ="block";
			</script>
			
			<?php
			echo "error";
		}
		}
		
		else
		{
			mysqli_error($datai);
			echo "something went wrong";
		}
		}
		?>
		

				
				
				

	</body>
</html>