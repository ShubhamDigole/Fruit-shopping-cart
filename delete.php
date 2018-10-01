<?php
	require_once("DB_controller.php");
	include("navbar.php");
	$username = $_SESSION['login'];
	echo '<br><br><br><br><br><br>';
	
		$val = $_GET['delete'];
		echo $val;
		echo $username;
		$que ="DELETE FROM `$username` WHERE `$username`.`id` = $val";
		if(mysqli_query($link,$que)){
            header("location:order.php");
            echo "record inserted successfully";
        }
        else{

            mysqli_error($que);
        }
	
?>