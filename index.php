<?php


include("navbar.php");	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap - Prebuilt Layout</title>

	<!-- Bootstrap -->
	
	<style type="text/css">
		
		
		.card {
			/*			border: 5px solid white;*/
			padding: 10px;
			margin-top: 10px;
			display: inline-block;
		}
		
		.carousel {
			margin-top: -30px;
			margin-bottom: 5px;
		}
		
		.carousel-item {
			width: 100%;
			height: 400px;
		}
		
		.container-fluid {
			display: inline-block;
			margin: 10px;
			background: rgba(0, 0, 0, .6);
		}
		
		.card-img-top {
			padding: 0px;
			height: 200px;
		}
		
		.card-text {
			padding: 0px;
			margin-bottom: 20px;
			border: 1px solid red;
			display: inline-block;
		}
		
		.btn {
			bottom: 0;
			margin: 5px;
			position: absolute;
		}
		
		#btn {
			float: left;
			left: 0;
		}
		
		
		.row {
			position: relative;
			margin: auto;
			right: 0;
			left: 0;
		}
		
		.container {
			float: left;
			color: aliceblue;
		}
	</style>
</head>

<body style="padding-top: 70px">

	

	<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background:#fcdd6f">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators1" style="background:#fcdd6f" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active"> <img class="d-block mx-auto" src="images/back1.jpg" alt="First slide">
				<div class="carousel-caption">
					<h5>First slide Heading</h5>
					<p>First slide Caption</p>
				</div>
			</div>
			<div class="carousel-item"> <img class="d-block mx-auto" src="images/back2.jpg" alt="Second slide">
				<div class="carousel-caption">
					<h5>Second slide Heading</h5>
					<p>Second slide Caption</p>
				</div>
			</div>
			<div class="carousel-item"> <img class="d-block mx-auto" src="images/back3.jpg" alt="Third slide">
				<div class="carousel-caption">
					<h5>Third slide Heading</h5>
					<p>Third slide Caption</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>

	<hr>
	<div class="row col-md-11">
		
		<?php
		
		require_once( "DB_controller.php" );
	
		$query = "SELECT * FROM fruitdata WHERE id";
		$sql = mysqli_query( $link, $query );
			$count = mysqli_num_rows($sql);
		while ( $row = mysqli_fetch_array( $sql ) ) {
				$id = $row[0];
			
			
				
			?>

		<div class="card col-md-3"> <img class="card-img-top" src="<?php echo $row[3];?>" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">
					<?php echo $row[1];?>
				</h5>
				<h6 class="card-titles">Price:
					<?php echo $row[5];?>
				</h6>
				
				
				<h6 class="card-text">Left In Stock:<?php echo $row[4];?></h6>
				<?php
					if($user != null){

			
					
				echo '<a class="btn btn-primary card-title" id="btn" href="buynow.php?link=' . $id . '">Buy Now</a>';
					}
				?>
			
			</div>
		</div>



		<?php
	
		}


		?>
		
	</div>
	<hr>
	<br>

	<?php echo $_SESSION['iddata'];?>
	<div class="container-fluid">
		<div class="container col-sm-3">
			Welcome To<br> FunZOA<br> FunZOA is a commercial
			<br> Website

		</div>
		<div class="container col-sm-3">
			Home<br> About Us<br> Contact Us<br> Deals
			<br> Help
			<br>

		</div>
		<div class="container col-sm-3">
			Terms and Condition<br> Privacy Policy

		</div>
		<div class="container col-sm-3">
			My account<br> Personal Information<br> Addresses
			<br> Orders
			<br> Wishlist
			<br> Track Order


		</div>



	</div>
	<hr>
	<footer class="alert-info">Content for class "alert-info" Goes Here</footer>
	
	</body>
</html>