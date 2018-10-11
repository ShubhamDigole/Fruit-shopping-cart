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
				z-index: 500;
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
				transform: rotateX(180deg);
				background: linear-gradient(red,blue);
				height: 600px;
			}	
			.fruit{
				border-bottom:2px solid green;
				margin-left: 10px;
				transform: rotateX(180deg);
				float: left;
				height: 15%;
				width: 30px;
				background: black;
				margin-left: 0px;
				transition: 1s all;
				color:white;
			}
			.jan{
				margin-left: 10px;
				
			}
		</style>	
	</head>
	<body onload="myFunction()">
		
		<div class="container-fluid">
		
		  <div class="conatiner" id="sidepanel">	
			  
				<ul>
			<li id="id">stats</li>
			<li id="id">Inbox</li>
			<li id="id">orders</li>
			<li id="id">Stocks</li>
			<li id="id">profile</li>
			<li id="id">user's list</li>



		</ul>
			</div>
				<div id="side" class="container" onclick="hide()">></div>
				<div class="container" id="data">
					<input type="number" id="val"><button onclick="run()">submit</button>
					
					<div class="graph">
						
					<div class="jan">=
					<div class="fruit" id="fruit"></div>
					<div class="fruit" id="fruits"></div>
					</div>
					</div>
					
					
			
				</div>
		</div>
		<?php
		$query = "SELECT * FROM fruitdata ";
		$sql = mysqli_query( $link, $query );
		$totalitems =0;
		$totalpurchase=0;
		$totalsell = 0;
		$totalpurchaseitems = 0;
		$totalremain = 0;
		while($row = mysqli_fetch_array( $sql ))
		{
		$totalpurchaseitems = $totalpurchaseitems + $row[4] + $row[8];
		$totalitems = $totalitems + $row[8];
		$totalremain = $totalremain + $row[4];
		$totalsell = $totalsell + ($row[6] * $row[8]);
		$totalpurchase = $totalpurchase + ($row[7] * $row[8]);	
		}
//		echo $totalitems;
//		echo "<br>";
//		echo $totalpurchase;
//		echo "<br>";
//		echo $totalsell;
//		
		$totalprofit = $totalsell - $totalpurchase;
//		echo "<br>";
//		echo $totalprofit;
//		echo "<br>";
//		echo $totalpurchaseitems;
		$percentage = $totalpurchaseitems/100;
//		echo "<br>";
//		echo $percentage;
//		echo "<br>";
		$remain = $totalremain/$percentage;
		//echo $remain;
		//echo "<br>";
		$sold = $totalitems / $percentage;
		//echo $sold;
		?>
		<script>
			var a=4;
			function myFunction(){
				var val = parseInt(" <?php echo $remain?>");
				var val2 = parseInt(" <?php echo $sold?>");
				//var val=document.getElementById('val').value;
				var fruit=document.getElementById('fruit');
				fruit.style.height = val+"%";
				
				var fruits=document.getElementById('fruits');
				fruits.style.height = val2+"%";
				
				//alert("button clicked");
				fruit.innerHTML = val + "%";
				fruits.innerHTML = val2 + "%";
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