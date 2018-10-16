<?php
	require_once("DB_controller.php");
	include("navbar.php");
	$username = $_SESSION['login'];
	echo '<br><br><br><br><br><br>';
	
		$val = $_GET['delete'];
		echo $val;
		echo $username;
		$que ="select * FROM `$username` WHERE `$username`.`id` = $val";
		$val = mysqli_query( $link, $que);
		$row = mysqli_fetch_array($val);	
	echo '<table class="table col-md-11 table-bordered mx-auto">
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
					
					<td>'.$row[1].'</td>
					<td>'.$row[2].'</td>
					<td>'.$row[3].'</td>
					<td>'.$row[4].'</td>
					
				</tr>
			
		</table>'
?>