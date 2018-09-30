<?php

session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
		.bg-darkt {}
		
		.navbar {
			height:40px;
			padding: 0px;
		}
		
		.navbar-brand {
			padding-left: 6px;
		}
		
		#search {
			position: relative;
		}
	
		#log {
			color: white;
			text-decoration: none;
			position: absolute;
			display: block;
			float: right;
			right: 0;
		}
		
		#login {
			color: white;
			text-decoration: none;
			right: 0;
			position: absolute;
			float: right;
			display: block;
		}
		
		.userimg {
			border: 1px solid red;
			margin-top: 10px;
			margin-left: 10px;
			border-radius: 50%;
			height: 40px;
			width: 40px;
		}
		
		#login a {
			color: white;
		}
		
		.user {
			padding-right: 20px;
			float: left;
			display: block;
		}
		.dropdown show{}
		#name {
			
			text-decoration: none;
			color: white;
		}
	
	
	</style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
	
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="index.php">FruitZOA</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
		  <li class="nav-item active"> <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a> </li>
		  <li class="nav-item active"> <a class="nav-link" href="ContactUs.php">Contact Us <span class="sr-only">(current)</span></a> </li>
		  <li class="nav-item active"> <a class="nav-link" href="#">Sort <span class="sr-only">(current)</span></a> </li>

		</ul>
		<form class="form-inline mx-auto">
				<input class="form-control" type="search" placeholder="Search" aria-label="Search">
				<button id="search" class="btn btn-outline-success" type="submit">Search</button>
		  </form>

		  <?php 
		
		require_once("DB_controller.php");
		$user = $_SESSION['login'];
	
		$query = "SELECT * FROM u_registration WHERE Username = '$user'";
	  	
		$sql = $result = mysqli_query($link,$query);
		
		
		$sql = mysqli_query($link,$query);

		while($row = mysqli_fetch_array($sql)){
			$arr = explode(' ',trim($row[3]));


		

		  

		
	  ?>

		 
			
		<div class="dropdown show log"> 
			<p style="color:white" id="name" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi,
			<?php echo $arr[0];	}?><img class="userimg" src="img/apricot.jpg">  </p>	
		
		 <div class="dropdown-menu">
				<h6 class="dropdown-header">
			  	<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Profile</a> 
				<div class="dropdown-divider"></div>
			  	<a class="dropdown-item" href="#">Orders</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="logout.php">Log out</a>
		  </div>

		</div>

		</form>
			<a href="loginpage.php"><button id="login" class="nav-item btn btn-danger"> Login</button></a>
		</div>
	</nav>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/popper.min.js"></script>
<?php
	if ( $user == NULL ) {
		?>
	<script>
		document.getElementById( "login" ).style.display = "block";
		document.getElementsByID("log").style.display = "none";
	</script>
	<?php
	} else {

		?>
	<script>
		document.getElementById( "login" ).style.display = "none";
		document.getElementsByClassName( "log" ).style.display = "block";
	</script>
	<?php  
	}
	
	?>

</body>
</html>