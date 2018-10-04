	<?php 
	include("navbar.php")
		?>
	<!DOCTYPE html>
	<html>
	<head>

		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<li id="id"nk rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script>
		<style>

			.width{position:absolute;
				text-overflow: hidden;
				padding-top: 30px;
				margin-top: 40px;
				height: 100%;
				background: rgba(0,0,0,.5);
				width: 250px;
				transition:1s all ease;
			}
			
			ul{
				text-align: center;
				padding-left: 0px;	
				text-decoration: none;
				list-style-type: none;
			}
			
			#id{	padding: 10px 0 10px 0;
				color: white;
				border-bottom:2px solid #514A4B;
			}
			.arrow{z-index:100;
				background: red;
				top:0;
				bottom:0;
				position:absolute;
				margin:auto;
				margin-left:225px;
				width:40px;
				height:60px;
				border-radius: 50%;
				font-size: 60px;	
				color:white;
				transition:1s all ease;
			}
			.container{

				background:red;
			}
		</style>
	</head>
	<body>

	<div class="width" id="width">
		<ul>
			<li id="id">stats</li>
			<li id="id">Inbox</li>
			<li id="id">orders</li>
			<li id="id">Stocks</li>
			<li id="id">profile</li>
			<li id="id">user's list</li>



		</ul>

		
		</div>
		<div class="arrow" onclick="hide()" id="arrow"></div>
		<div class="container">dsjasfafhsdhfhjhgjghjfshgfhgjhfjdsfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssauifsdfahdjshhfsgfhgfdhgsfjdk</div>
		
		
		<script>
			var a=4;
			function hide(){
				
				var btn = document.getElementById('arrow');		
				var sidebar = document.getElementById('width');
				
			
				if(a>3){
					
					sidebar.style.width = "0px";
					btn.style.marginLeft = "-25px";
					a=2;
					
		
				}
				else{
					btn.style.marginLeft = "225px";
					sidebar.style.width = "250px";
					a=5;	
				}
				console.log(a);

			}
		</script>
		
	</body>
	</html>