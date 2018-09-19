<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Prebuilt Layout</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
    .bg-darkt {
}
		
		.navbar{
			
			padding: 0px;
		}
		
		.navbar-brand{
			padding-left:6px;
		}
		#search{
			
			position:relative;
			
		}
		.card{
			padding: 0px;
			margin-top: 10px;
			display: inline-block;
		}
		.carousel{
			
			margin-top:-30px;
			margin-bottom: 5px;
			
		}
		.carousel-item{
			
			width: 100%;
			height: 400px;
			
		}
		.container-fluid{
			
			display: inline-block;
			margin: 10px;
			background: rgba(0,0,0,.6);
		}
		
	
		.card-img-top{
			padding: 0px;
			height: 300px;
		}
		
		.card-text{	
			
			padding: 0px;
			margin-bottom: 50px;
			border: 1px solid red;
			display: inline-block;
		}
		.btn{
			bottom: 0;
			margin: 10px;
			position: absolute;
		
			
		}
		#log{
			position: relative;
			display: block;
			float: right;
		}
    </style>
  </head>
  <body style="padding-top: 70px">
	  
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="#">FruitZOA</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item active"> <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item active"> <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item active"> <a class="nav-link" href="#">Sort <span class="sr-only">(current)</span></a> </li>
	       
	        </ul>
	      <form class="form-inline mx-auto">
	        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
	        <button id="search"class="btn btn-outline-success" type="submit">Search</button>
          </form>
			<form action="logout.php">
				<input type="submit" class="nav-item btn btn-primary"> Log Out </button>
			</form>
      </div>
  </nav>
	  
    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background:#fcdd6f" >
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
	  
  <div class="row">
    <div class="card col-md-4"> <img class="card-img-top" src="img/banana.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Bananas</h5>
	      <p class="card-text">Bananas with less sugar and claries 60/kg. An instant energy booster, banana is one fruit that is commonly available across the globe. </p>
      <a href="#" class="btn btn-primary">Buy Now</a> </div>
  </div>
	  
    <div class="card col-md-4"> <img class="card-img-top" src="img/apricot.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Apricot</h5>
	      <p class="card-text">Apricot : One of the most versatile fruits, common knowledge claims that the apricot was originally cultivated in China, till the Persians discovered it.</p>
      <a href="#" class="btn btn-primary">Buy Now</a> </div>
  </div>
    <div class="card col-md-4"> <img class="card-img-top" src="img/black.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Black Grapes</h5>
	      <p class="card-text">A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis.
		  price 60/kg</p>
      <a href="#" class="btn btn-primary">Buy Now</a> </div>
  </div>
	  
    <div class="card col-md-4"> <img class="card-img-top" src="img/cherry.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Cherry</h5>
	      <p class="card-text">Some quick example text to build on thes card title and make up the bulk of the card's content.</p>
	      <a href="#" class="btn btn-primary"> Buy Now</a> </div>
    </div>
	  
	<div class="card col-md-4"> <img class="card-img-top" src="img/greengrapes.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Green Grapes</h5>
	      <p class="card-text">Some quick example text to build on thes card title and make up the bulk of the card's content.</p>
	      <a href="#" class="btn btn-primary"> Buy Now </a> </div>
    </div>

	  
	  <div class="card col-md-4"> <img class="card-img-top" src="img/lichi.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Litchi</h5>
	      <p class="card-text">Some quick example text to build on thes card title and make up the bulk of the card's content.</p>
	      <a href="#" class="btn btn-primary"> Buy Now </a> </div>
    </div>

	  
  </div>

	  <hr>
	  <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
	      <ul class="navbar-nav mr-auto mx-auto">
	        <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
			   <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li> <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li> <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
	        
          </ul>
	     
        </div>
  </nav>
	  
<hr>
	  
	  	  
  <div class="row">
    <div class="card col-md-4"> <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Card title</h5>
	      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a> </div>
  </div>
	  
    <div class="card col-md-4"> <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Card title</h5>
	      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a> </div>
  </div>
    <div class="card col-md-4"> <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Card title</h5>
	      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>	
      <a href="#" class="btn btn-primary">Go somewhere</a> </div>
  </div>
	  
	 
	  <hr>
	  <br>
	  
	  
  <div class="container-fluid">
	 	<div class="container col-sm-3">
	  		fdsahwfaejdsfdjsjfh
			
	  	</div> 
	  <div class="container col-sm-3">
	  		fdsahwfaejdsfdjsjfh
			
  	</div>
	  <div class="container col-sm-3">
	  		fdsahwfaejdsfdjsjfh
			
	  	</div>
	  <div class="container col-sm-3">
	  		fdsahwfaejdsfdjsjfh
			
  	</div>
	  
	  
	  
	  </div>
	  <hr>

	  <?php 
	  $_SESSION[login]= $username;
	  echo "hii".$_SESSION['login'];
	  ?>
	  <footer class="alert-info">Content for  class "alert-info" Goes Here</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	  
	  
  </body>
</html>
