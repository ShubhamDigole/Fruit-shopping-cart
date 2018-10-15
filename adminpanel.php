	 <?php 
	include("navbar.php")
		?>
	
	
	
<html>
	<head>

		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link id="id" rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
			.container-fluid{
		
			margin-top:40px;
			padding:0px;
		}
				.container{
				padding: 0;
				margin: 0;
				float: right;
				
				
			}
			#sidepanel{
				border-right:1px solid gray;	
				position: fixed;
				overflow: hidden;
				transition: 1s all;
				height: 100%;				
				
				width: 250px;				
			}
			ul{
				padding: 0px;
			}
			#id{
				
				text-align: center;
				border-bottom: 1px solid black;
				list-style: none;
				padding-bottom: 10px;
				padding-top: 10px;
			
			}
			#side{
				display:block;
				z-index: 50;
				top: 0;
				bottom: 0;
				margin: auto;
				margin-left: 240px;
				position: fixed;
				width: 20px;
				height: 30px;
				background: red;
				transition: 1s all;	
				
			}
			.alldata{
				
				width: 100%;	
				
				margin-left: 250px;
				transition: 1s all;
				position: fixed;
				overflow-y: scroll;
				max-height: 100%;
			}
			
			.graph{
				/* transform: rotateX(180deg); */
					 /* background: linear-gradient(red,blue); */ 
							margin-top:100px;
								padding: 5px;
								max-width:100%;
								overflow:hidden;
			}	
			
			.circle{
				float:left;
				z-index: 1;
				overflow: hidden;
				border-radius: 0;
				position: relative;
				margin: 10px;
				background: green;
				height: 150px;
				width:250px;
			}
			.inner{
				right: 0;
				left:0;
				/* border: 10px solid green; */
				top: 0;
				z-index:-10;
				transition: 1s all;
				margin: auto;
				position: absolute;
				height:0px;
				width:300px;
				background: red;
			
			}
			.data{
				z-index:5;
				text-align:center;
				margin-top: 75px;
				top: 0;
				bottom: 0;
				right: 0;
				left: 0;
				

			}
			.block{
			padding:25px;
			margin-top:10px;
			float:left;
			position:relative;
			width:250px;
			height:150;
			background:red;
			margin-left:5px;
		}
			.form{
			border:2px solid red;
			max-width:500px;
			position: relative;
			right: 0;
			left: 0;
			padding:10px; 
			
			margin: auto;
			margin-top:10px;
		}
	
		.form-control{
			
			margin: 10px;
		}
	
		#msgs{
			margin-top:400px;
			position:relative;
			border:1px solid gray;
		}
		</style>	
	</head>
	<body onload="myFunction()" data-spy="scroll" data-target=".conatiner" data-offset="50">
		
		<div class="container-fluid">
		
		  <div class="container" id="sidepanel">	
			  
				<ul>
			<li id="id"><a href="#data">Stats</a></li>
			<li id="id"><a href="#msgs">Inbox</a></li>
			<li id="id"><a href="#fuitinsert">Fruit Insert</a></li>
			<li id="id"><a href="#order">Orders</a></li>
			<li id="id"><a href="#add">Add Fruits</a>
			</li>
			<li id="id"><a href="#add">Users<a></li>
			<li id="id">profile</li>
			<li id="id">user's list</li>


		

		</ul>
	</div>
	<?php	
				$query = "SELECT * FROM fruitdata ";
				$sql = mysqli_query( $link, $query );
				$totalitems =0;
				$totalpurchase=0;
				$totalsell = 0;
				$totalpurchaseitems = 0;
				$totalremain = 0;
				$profitpercentage=0;
				while($row = mysqli_fetch_array( $sql ))
				{
				$totalpurchaseitems = $totalpurchaseitems + $row[4] + $row[7];
				$totalitems = $totalitems + $row[7];
				$totalremain = $totalremain + $row[4];
				$totalsell = $totalsell + ($row[5] * $row[7]);
				$totalpurchase = $totalpurchase + ($row[6] * $row[7]);	
				}
				$totalprofit = $totalsell - $totalpurchase;
				$tprecentage=1;
				$tpercentage =$totalsell / 100;
				$profitpercentage = $totalprofit/$tpercentage;
				$percentage = $totalpurchaseitems/100;
				$remain = $totalremain/$percentage;
				$sold = $totalitems / $percentage;
		?>
		<div id="side" class="container" onclick="hide()">></div>
				<div class="container alldata" id="data">
					<div style="overflow-y: scroll;max-height: 100%;">
					
					<div class="graph">
						
						<div class="circle">
							<div class="inner" id="sold"></div>
							<p class="data" id="sell"></p>
				
						</div>
							<div class="circle">
							<div class="inner" id="profits"></div>
							<p class="data" id="profit"></p>
				
						</div>
						<div class="circle"> 
						<?php
								$date = date('y-m-d');
								$display = "SELECT * from u_registration WHERE date= '$date'";

								$sql = mysqli_query( $link, $display);
							$count = mysqli_num_rows($sql);
							
							echo '<h4>TODAY Signups</h4>
							<h2>',$count,'</h2>';
							?>
							
						</div>
						<div class="circle"> 
						<?php
								$date = date('y-m-d');
								$display = "SELECT * from u_registration";

								$sql = mysqli_query( $link, $display);
							$count = mysqli_num_rows($sql);
							
							echo '<h4>Total Users</h4>
							<h2>',$count,'</h2>';
							?>
							
						</div>
					<div class="graph"id="msgs" >
					<h4 align="center">INBOX</h4>
						<?php
							$display = "SELECT * from contactus";

							$sql = mysqli_query( $link, $display);
							//		$count = mysqli_num_rows($sql);
							while ( $row = mysqli_fetch_array( $sql ) ) {

								echo '<div >
										<h4>Name: '.$row[1].'
										</h4>
										<h6>Massage: '.$row[4].'</h6>
										</div>';



							}
						?>
					</div>
					<div class="graph" id="fuitinsert">
					<form class="form-group form" method="post" action="data3.php">
							<h1 style="text-align:center"> Insert New Fruit  </h1>
							
							<input type="text" class="form-control" id="exampleInputEmail1" name="fruitname" placeholder="Fruit Name">
							
							
							<input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Decription">
								
							
							<input type="file" name="file">	
							<br>
							<input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Selling Price">
							<input type="text" class="form-control" id="exampleInputEmail1" name="pur_price" placeholder="Purchase Price">
							<input type="text" class="form-control" id="exampleInputEmail1" name="quantity" placeholder="Quantity">
						<button type="submit" class="btn btn-primary">Submit</button>
						</form>

											
					</div>

				<div class="graph" id="order">

				<h5 style="text-align:center">Orders</h5>
			
				<table class="table col-md-12 table-bordered">

				<thead class="thead-dark">
				<tr>
				<th scope="col">No.</th>
				<th scope="col">Fruit Name</th>
				<th scope="col">Quantity Remain</th>
				<th scope="col">Sold Quantiy</th>
				<th scope="col">Price per kg</th>
				<th scope="col">Total</th>
				<th scope="col">Total Profit</th>
				</tr>
				</thead>

				<tbody>
				<?php
						
						$username = $_SESSION['login'];
						$id = 0;
						$display = "SELECT * from fruitdata";

						$sql = mysqli_query( $link, $display);
				//		$count = mysqli_num_rows($sql);
					while ( $row = mysqli_fetch_array( $sql ) ) {

						
						$id = $row[0];
					
							
				echo ' <tr >
					<th class="record" id="record-">',$id,'</th>
					<td> ',$row[1],'</td>
					<td>',$row[4],'</td>
					<td>',$row[7],'</td>
					<td>',$row[5],'</td>
					<td>',$row[4] + $row[7],'</td>
					<td>',$row[8],'</td>	
					</tr>';

				
				}
				?>
				
					</table>

				
					</div>

					<div class="graph" id="add">
						
						<h5 style="text-align:center">Orders</h5>

						<table class="table col-md-12 table-bordered">

						<thead class="thead-dark">
						<tr>
						<th scope="col">No.</th>
						<th scope="col">Fruit Name</th>
						<th scope="col">Quantity Remain</th>
						<th scope="col">Enter Quanity</th>
						<th scope="col">Price per kg</th>
						<th scope="col">Total</th>
						<th scope="col">Add</th>
						</tr>
						</thead>
						
						<tbody>
						<?php
								 
								$username = $_SESSION['login'];
								$id = 0;
								$display = "SELECT * from fruitdata";

								$sql = mysqli_query( $link, $display);
						//		$count = mysqli_num_rows($sql);
							while ( $row = mysqli_fetch_array( $sql ) ) {

								
								$id = $row[0];
							
									
						echo '<form method="post" action="insert.php?link=' . $row[0] . '& val='.$row[4].'"> 
							<tr >
							<th class="record" id="record-">',$id,'</th>
							<td> ',$row[1],'</td>
							<td>',$row[4],'</td>
							<td><input type="number" name="insert"></td>
							<td>',$row[5],'</td>
							<td>',$row[4] + $row[7],'</td>
							<td><input type="submit" class="btn btn-primary" value="Add"></td>	
							</tr>
							</form>';
						

						}
						
						
						?>

							</table>

						</form>
							</div>
				<div class="graph" id="order">

				<h5 style="text-align:center">Users</h5>
			
				<table class="table col-md-12 table-bordered">

				<thead class="thead-dark">
				<tr>
				<th scope="col">No.</th>
				<th scope="col">Name</th>
				<th scope="col">Username</th>
				<th scope="col">Address</th>
				<th scope="col">Email</th>
				<th scope="col">Phone</th>
				<th scope="col-md-12">Date</th>
				</tr>
				</thead>

				<tbody>
				<?php
						
						$username = $_SESSION['login'];
						$id = 0;
						$display = "SELECT * from u_registration";

						$sql = mysqli_query( $link, $display);
				//		$count = mysqli_num_rows($sql);
					while ( $row = mysqli_fetch_array( $sql ) ) {

						
						$id++;
					
							
				echo ' <tr >
					<th class="record" id="record-">',$id,'</th>
					<td> ',$row[3],'</td>
					<td>',$row[1],'</td>
					<td>',$row[4],'</td>
					<td>',$row[5],'</td>
					<td>',$row[9],'</td>
					<td>',$row[10],'</td>	
					</tr>';

				
				}
				?>
				
					</table>

				
								</div>
								
				</div>
				</div>
		</div>
		<script>
			var a=4;
			function myFunction(){
				var val = parseInt(" <?php echo $profitpercentage?>");
				
				var val2 = parseInt(" <?php echo $sold?>");
				
			
				var fruit=document.getElementById('sold');
				
				
				
				var sold = document.getElementById('sell');
				var profits=document.getElementById('profits');
				var profit = document.getElementById('profit');
				
				fruit.style.height = val2+"%";
				profits.style.height = val+"%";
				
				
				sold.innerHTML = val2 + "%  are sold";
				profit.innerHTML = val + "% profit";
			}
			function hide(){
				var text = document.getElementById('side');	 
				var btn = document.getElementById('data');		
				var sidebar = document.getElementById('sidepanel');
				
			
				if(a>3){
					
					sidebar.style.width = "0px";
					text.style.marginLeft = "0px";
					btn.style.marginLeft = "0px";
					btn.style.maxWidth = "100%";
					a=2;
					
		
				}
				else{
				
					sidebar.style.width = "250px";
					a=5;					
					text.style.marginLeft = "250px";
					btn.style.marginLeft = "250px";
					btn.style.width = "81%";

				}
				console.log(a);

			}
		</script>
		
		
	</body>

</html>