<?php
	include('navbar.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="../../../Users/Admin/Documents/Unnamed Site 2/css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
	<style>
		body{
			background: url(img/orange.jpg); 
			background-size: cover;
		}
		
		.form-group{
			position: absolute;
			top:120;
			left: 0;
			right:0;
			padding: 20px;
			background: #A49898;
			margin: auto;
			
			border-radius: 10px;
		}
		.form-control{
			margin-bottom: 10px;
		}
	</style>
</head>
<body><br><br>
	
		
	<form action="cdata.php" method="post" name="contactus" class="form-group col-md-4">
	
		<!--<input type="text" name="name" class="form-control">
		<input type="hidden" placeholder="name">
		<hr>
		<input type="text" name="email" class="form-control">
		<input type="text" name="phoneno" class="form-control">
			<input type="text" name="subject" class="form-control">
		<textarea class="form-control" name="msg"></textarea>
		<button type="submit" class="form-control btn btn-primary" name="submit">Submit</button>-->
		
		

	</form>
	
</body>
</html>

<?php
if(isset($_POST['submit'])){
	
	
	
	
	}



?>