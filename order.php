<?php
	require_once("DB_controller.php");
	include("navbar.php");
	
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
			
			$username = $_SESSION['login'];
			$id = 0;
			$display = "SELECT * from $username";

			$sql = mysqli_query( $link, $display);
	//		$count = mysqli_num_rows($sql);
		while ( $row = mysqli_fetch_array( $sql ) ) {

			
			$id = $row[0];
		
				
echo ' <tr >
      <th class="record" id="record-">',$id,'</th>
      <td> ',$row[1],'</td>
      <td>',$row[2],'</td>
      <td>',$row[3],'</td>
	<td>',$row[4],'</td>
	 <td><a role="button" href="delete.php?delete=',$row['0'],'"  class="btn btn-danger delete" name="delete">X</a></td>	
    </tr>';

	
	}
	?>
	
		</table>

	


	
	
</body>
</html>