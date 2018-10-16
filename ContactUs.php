 	
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
			background: rgba(0,0,0,0.8);
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
	
		<input type="text" name="name" class="form-control" required placeholder="Name">
		<input type="text" name="email" class="form-control" required placeholder="Email Address">
		<input type="text" name="phoneno" class="form-control" required placeholder="Phone no">
			<input type="text" name="subject" class="form-control" required placeholder="Subject">
		<textarea class="form-control" name="msg" required placeholder="Write message here..."></textarea>
		<button type="submit" class="form-control btn btn-primary" name="submit" onclick="call()">Submit</button>

	</form>
	<script>
	function call(){

		alert ("thanks for contacting us we will reach at you as soon as possible"); 
	}
	</script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	
	
	
	
	}



?>