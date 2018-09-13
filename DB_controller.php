<?php

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "project";
	
	
	
	$link =  mysqli_connect($servername,$username,$pass,$dbname);

	if(!$link){
		
		die("connection failed");
	}


?>