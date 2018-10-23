<?php
    include("DB_controller.php");

    $id = $_GET['id'];
    $val = $_POST['data'];
  
   
    
    $insert = "UPDATE `u_registration` SET `Address` = '$val' WHERE `u_registration`.`id` = '$id'";
    echo $id;
   
    if(mysqli_query($link,$insert)){
    header("location:adminpanel.php#add");
    }

    else{

        mysqli_error($insert);
    }


?>