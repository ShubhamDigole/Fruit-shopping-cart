
<?php

include("navbar.php");

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bill</title>
<style>



		body{
			color:white;
	background:url("./img/billback.jpg");
	}
	
	table{
		font-weight: bold;
		font-style: italic;		
	}
	footer{
		font-weight: bolder;
		left: 0;
		right: 0;
		position: absolute;
		bottom: 0;
		padding-bottom: 10px;
	}

	h1{

		color:black;
	}
	.container-fluid{


		position:absolute;
		left:0;
		right:0;
		margin:auto;	
	}

	</style>
	
	</head>

<body>

<br><br><br><br><br>	

	
	<center><B><h1>BILL</h1></B></center>
	<?php 
		$query = "SELECT * FROM u_registration WHERE Username = '$user'";
	  	
		$sql = $result = mysqli_query($link,$query);
		
		
		$sql = mysqli_query($link,$query);

	$rows = mysqli_fetch_array($sql)
		?>
	<div class="container-fluid col-md-10">
	<table class="col-md-12"> 
		
		<tr>
	
		<td>Name: <?php echo $rows[3] ?></td>

			<td>E-mail: <?php echo $rows[5] ?></td>
		
		</tr>
		<tr>
	
		<td>City: <?php echo $rows[4] ?></td>
			<td>Mo No: <?php echo $rows[9] ?></td>
		
		</tr>
		
		</table>
	<hr>	
		<br>	
	
		<?php
	 $sts = $_SESSION['login'] ;
	$getdata = "SELECT * FROM $sts ORDER BY id DESC LIMIT 1";
	$val = mysqli_query( $link, $getdata );
	$row = mysqli_fetch_array($val);	
	 
	

	
	?>
		
		<table class="table col-md-12 table-bordered">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Fruit Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
	 <th scope="col">Total</th>
	
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?php echo $row[1];?></td>
      <td><?php echo $row[2];?></td>
      <td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
	 	
    </tr>

		</table>

	</div>
	
	<footer><center>Thanks For Shopping With Us..!</center></footer>
	</div>
	
</body>
</html>