<?php
    include("DB_controller.php");
    $val = $_POST['insert'];
    $id = $_GET['link'];
   
    $insert = "UPDATE `fruitdata` SET `Price` = '$val' WHERE `fruitdata`.`id` = '$id'";
    echo $id;
    echo $value;
    mysqli_query($link,$insert);
    header("location:adminpanel.php#add");



?>