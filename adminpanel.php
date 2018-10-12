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
			#data{
				max-width: 81%;	
				padding: 12px;
				margin-left: 250px;
				transition: 1s all;
				position:absolute;
				
			}
			
			.graph{
				/* transform: rotateX(180deg); */
					 /* background: linear-gradient(red,blue); */ */
							margin-top:100px;
								padding: 5px;
			}	
			
			.circle{
				float:left;
				z-index: 1;
				overflow: hidden;
				border-radius: 50%;
				position: relative;
				margin: 10px;
				background: green;
				height: 300px;
				width:300px;
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
				margin-top: 140px;
				top: 0;
				bottom: 0;
				right: 0;
				left: 0;
				

			}
			.form{
			border:2px solid red;
			max-width:500px;
			position: relative;
			right: 0;
			left: 0;
			padding:10px; 
			
			margin: auto;
			margin-top:400px;
		}
	
		.form-control{
			
			margin: 10px;
		}
		</style>	
	</head>
	<body onload="myFunction()">
		
		<div class="container-fluid">
		
		  <div class="conatiner" id="sidepanel">	
			  
				<ul>
			<li id="id"><a href="#data"> Stats</a></li>
			<li id="id"><a href="#fuitinsert"> Fruit Insert</a></li>
			<li id="id"><a href="#order"> orders</a></li>
			<li id="id">Stocks</li>
			<li id="id">profile</li>
			<li id="id">user's list</li>


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
		$totalpurchaseitems = $totalpurchaseitems + $row[4] + $row[8];
		$totalitems = $totalitems + $row[8];
		$totalremain = $totalremain + $row[4];
		$totalsell = $totalsell + ($row[6] * $row[8]);
		$totalpurchase = $totalpurchase + ($row[7] * $row[8]);	
		}
		echo $totalitems;
		echo "<br>";
		echo $totalpurchase;
		echo "<br>";
		echo $totalsell;
		
		$totalprofit = $totalsell - $totalpurchase;
		echo "<br>";
		echo $totalprofit;
		echo "<br>";
		$tprecentage=1;
		$tpercentage =$totalsell / 100;
		echo "tpercentage";
		echo $tpercentage;	
		echo "<br>";
		$profitpercentage = $totalprofit/$tpercentage;
		echo $profitpercentage;
		echo "<br>";
		echo $totalpurchaseitems;
		$percentage = $totalpurchaseitems/100;
		echo "<br>";
		echo $percentage;
		echo "<br>";
		$remain = $totalremain/$percentage;
		echo $remain;
		echo "<br>";
		$sold = $totalitems / $percentage;
		echo $sold;
		?>

		</ul>
			</div>

				<div id="side" class="container" onclick="hide()">></div>
				<div class="container" id="data">
					
					
					<div class="graph">
						
						<div class="circle">
							<div class="inner" id="sold"></div>
							<p class="data" id="sell"></p>
				
						</div>
							<div class="circle">
							<div class="inner" id="profits"></div>
							<p class="data" id="profit"></p>
				
						</div>
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
					a=2;
					
		
				}
				else{
				
					sidebar.style.width = "250px";
					a=5;					
					text.style.marginLeft = "250px";
					btn.style.marginLeft = "250px";

				}
				console.log(a);

			}
		</script>
		
		
	</body>

</html>