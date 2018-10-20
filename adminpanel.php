	 <?php 
	include("navbar.php");
	session_start();
		?>
	
	
	
<html>
	<head>

		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link id="id" rel="stylesheet" type="text/css" media="screen" href="main.css" />

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<script src="main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
			body{
			color:white;
			background: url("./img/adminback.jpg");
			}
			.container-fluid{
				margin-top:40px;
				padding:0px;
				margin-bottom:40px;
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
				margin-bottom:20px;
				margin-top:20px;
				padding: 5px;
				max-width:100%;
				overflow:hidden;
			}	
			
			.circle{
				
				float:left;
				z-index: 1;
				overflow: hidden;
				border-radius: 3px;
				position: relative;
				margin: 10px;
				background: #00C851;
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
				background: #ff4444;
			
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
			#pad{

				padding:20px;
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
				border-radius:10px;
				margin-top:100px;
				padding:10px;
				background: rgba(255, 255, 255, 0.2);
			}
		
			.form-control{
				margin-top:20px;
				
			}
			#btn{

				margin:10px;
			}
		
			#msgs{
				font-family:Sitka Subheading;
				margin-top:400px;
				position:relative;
				border:1px solid gray;
			}
			i{
				padding-right:10px;
				
			}
		</style>	
	</head>
	<body onload="myFunction()" data-spy="scroll" data-target=".conatiner" data-offset="50">
		<?php
				$admin = $_SESSION['admin'];
				// check is user is admin or not
				if($admin == 0){
					?><script>
					// is user is not admin then redirect to index page
					window.location.href = 'index.php';
					</script>
					<?php
							
				}
			?>
		<div class="container-fluid">
			<!-- moving side panel -->
		  	<div class="container" id="sidepanel">	
				<!-- links in panel -->
				<ul>
					<li id="id"><a href="#stats">Stats</a></li>
					<li id="id"><a href="#msgs">Inbox</a></li>
					<li id="id"><a href="#fuitinsert">Fruit Insert</a></li>
					<li id="id"><a href="#order">Orders</a></li>
					<li id="id"><a href="#add">Add Fruits</a></li>
					<li id="id"><a href="#users">Users<a></li>
					

				</ul>
			</div>
		<?php	
				// get data from fruits table
				$query = "SELECT * FROM fruitdata ";
				$sql = mysqli_query( $link, $query );
				
				
				while($row = mysqli_fetch_array( $sql )){
					//to get toatal purchase items
					$totalpurchaseitems = $totalpurchaseitems + $row[4] + $row[7];
					
					//to get toatal items
					$totalitems = $totalitems + $row[7];
					
					//to get toatal remaining items items
					$totalremain = $totalremain + $row[4];

					////to get toatal sold Price
					$totalsell = $totalsell + ($row[5] * $row[7]);
					
					//to get toatal purchsed Price
					$totalpurchase = $totalpurchase + ($row[6] * $row[7]);	
				}
				//to get toatal Profit
				$totalprofit = $totalsell - $totalpurchase;
				$tprecentage=1;

				//to get percetage
				$tpercentage =$totalsell / 100;
				$profitpercentage = $totalprofit/$tpercentage;
				$percentage = $totalpurchaseitems/100;
				$remain = $totalremain/$percentage;
				$sold = $totalitems / $percentage;
		?>
		<!-- Button for hiding and diplyaing menu -->
		<div id="side" class="container" onclick="hide()">></div>
				<div class="container alldata" id="data">
					<div style="overflow-y: scroll;max-height: 100%;">
					
						<div class="graph" id="stats">
							<!-- block to display how much items sold -->
							<div class="circle">
								<div class="inner" id="sold"></div>
								<p class="data" id="sell"></p>
					
							</div>
							<!-- block to display how much Profit got-->
							<div class="circle">
								<div class="inner" id="profits"></div>
								<p class="data" id="profit"></p>
									
							</div>

							<!-- block to display how many users registered today-->
							<div class="circle" id="pad"> 
							<?php
								$date = date('y-m-d');
								$display = "SELECT * from u_registration WHERE date= '$date'";
								$sql = mysqli_query( $link, $display);
								$count = mysqli_num_rows($sql);
								
								echo '<h4>TODAY Signups</h4>
								<i class="fas fa-user fa-3x"></i>
								<h2>',$count,'</h2>
								';
								?>
								
							</div>
							<div class="circle" id="pad"> 
								<?php
									$date = date('y-m-d');
									$display = "SELECT * from u_registration";
									$sql = mysqli_query( $link, $display);
									$count = mysqli_num_rows($sql);									
									echo '<h4>Total Users</h4>
									<i class="fas fa-user fa-3x"></i>
									<h2>',$count,'</h2>';
									?>
								
							</div>

							<!-- div for how much contact requests are admin got -->
							<div class="graph"id="msgs" >
								<h4 align="center">INBOX</h4>
								<?php
									$display = "SELECT * from contactus";
									$sql = mysqli_query( $link, $display);
									while ( $row = mysqli_fetch_array( $sql ) ) {

										echo '<div >
												<h4>Name: '.$row[1].'
												</h4>
												<h6>Massage: '.$row[4].'</h6>
												</div>';
										}
								?>
							</div>

					<!--- div for iserting fruits -->
					<div class="graph" id="fuitinsert">
						<form class="form-group col-md-5 mx-auto form" method="post" action="">

							<input type="text" class="form-control" id="exampleInputEmail1" name="fruitname" placeholder="Fruit Name">
							<input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Decription">
							<input type="file"  name="file" id="btn">	
							<br>
							<input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Selling Price">
							<input type="text" class="form-control" id="exampleInputEmail1" name="pur_price" placeholder="Purchase Price">
							<input type="text" class="form-control" id="exampleInputEmail1" name="quantity" placeholder="Quantity">
							<button type="submit" class="btn btn-primary" name="submit" id="btn">Submit</button>
						</form>
						<?php	

							if (isset($_POST['submit'])){
							

							$NAME = $_POST['fruitname'];
							$DESCRIPTION = $_POST['description'];
							$URL = $_POST['file'];
							$PRICE = $_POST['price'];
							$QUANTITY = $_POST['quantity'];
							$Purchase = $_POST['pur_price'];
							
							// query to insert data to table
							$query="INSERT INTO fruitdata(Name,Discription,ImgURl,Quantity,Price,pur_price) VALUES ('$NAME','$DESCRIPTION','http://localhost/Fruit-shopping-cart/img/$URL','$QUANTITY','$PRICE','$Purchase')";

								if(mysqli_query($link,$query))
								{
									?><script>
									window.location.href = 'adminpanel.php#fuitinsert';
										</script>
									<?php
									//header("location:adminpanel.php#fuitinsert");
									
								}	
								else 
								{
									// if error occured
									echo "Error : Could not able to execute";
									mysqli_error($query);
									
									mysqli_error($link);

								}
							
								}
						?>
												
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

								// query to select all data from fruits data
								$display = "SELECT * from fruitdata";

								$sql = mysqli_query( $link, $display);
								
								// loop until all data is written
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
						
					<h5 style="text-align:center">Add Quantity</h5>

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
									
									//$count = mysqli_num_rows($sql);
									while ( $row = mysqli_fetch_array( $sql ) ) {
									$id = $row[0];
									echo '<form method="post" action="insert.php?link=' . $row[0] . '& val='.$row[4].'#add"> 
									<tr >
									<th class="record" id="record-">',$id,'</th>
									<td> ',$row[1],'</td>
									<td>',$row[4],'</td>
									<td><input type="number" name="insert"></td>
									<td>',$row[5],'</td>
									<td>',$row[4] + $row[7],'</td>
									<td><button class="btn btn-primary"><i class="fa fa-plus"></i><input type="submit" class="btn btn-primary" name="submit2" value="Add"></button></td>	
									</tr>
									</form>';
									

								}
								
								
							?>
						</tbody>
					</table>
				</div>
				<div class="graph" id="users">

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
					<tbody>
				</table>		
			</div>
									
		</div>
	

		<script>
			
			
			var a=4;
			// onload function to load page 
			function myFunction(){

				// to pass values to javaascript
				var val = parseInt(" <?php echo $profitpercentage?>");
				var val2 = parseInt(" <?php echo $sold?>");
				var val3 = parseInt(" <?php echo $totalprofit?>");
				//  variables for grtting elements id
				var fruit=document.getElementById('sold');
				var sold = document.getElementById('sell');
				var profits=document.getElementById('profits');
				var profit = document.getElementById('profit');
				
				fruit.style.height = val2+"%";
				profits.style.height = val+"%";
				sold.innerHTML = val2 + "%  are sold";
				profit.innerHTML =val3 +" <i class='fas fa-rupee-sign fa-1x'></i><h6>" + val + "% profit</h6>";
				}
				
				// function to hide the data
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
			

			}
		</script>
		
		
	</body>

</html>