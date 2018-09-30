<?php
	require_once("DB_controller.php");
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	
		#heading{	position: relative;
			margin-top:100px;
			text-align: center;
		}
		
		.table{
			text-align: center;
			position:absolute;
			margin: auto;
			right: 0;
			left: 0;
			
		}
		
		#delete{
			
			font-weight: bolder;
			color: white;
			line-height: 15px;
				height:30px;
			width:40px;
		}
	
	
	</style>
</head>

<body>
	
	<h5 id="heading">Orders</h5>

	
	


			
		<table class="table col-md-11 table-bordered">
		
  <thead class="thead-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Fruit Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
	 <th scope="col">Total</th>
		<th scope="col">Total</th>
    </tr>
  </thead>
  
  <tbody>
  
  <?php
			include("navbar.php");
			$username = $_SESSION['login'];
			$id = 0;
			$display = "SELECT * from $username";

			$sql = mysqli_query( $link, $display);
	//		$count = mysqli_num_rows($sql);
		while ( $row = mysqli_fetch_array( $sql ) ) {

			
			$id = $row[0];
		
				
		?>
    <tr>
      <th scope="row"><?php echo $id;?></th>
      <td><?php echo $row[1];?></td>
      <td><?php echo $row[2];?></td>
      <td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
	 <td><a role="button" href="?action=remove" id="delete" class="btn btn-danger" name="btn" onClick="delete()">X</a></td>	
    </tr>
	
	
<?php

	if($action == 'remove'){	
		
	$delete = "DELETE FROM $username WHERE id = '$id'";
	
		$sql = mysqli_query( $link, $delete);
		
		
		}
		else{

			echo "error";
		}
	
	}
	?>	</table>

	


	
	
</body>
</html>