<?php
include("navbar.php");
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link href="../../../Users/Admin/Documents/Unnamed Site 2/css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
</head>

<body>
	<form name="profile" method="get" action="userinfo.php">
	
<h5> Profile </h5>
		<?php 
		$query = "SELECT * FROM u_registration WHERE Username = '$user'";
	  	
		$sql = mysqli_query($link,$query);
		
		$sql = mysqli_query($link,$query);

		$rows = mysqli_fetch_array($sql);
		?>
	</form>
	


</div>
</body>
</html>