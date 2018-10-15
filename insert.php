<?php
    include("DB_controller.php");
    $val = $_POST['insert'];
    $id = $_GET['link'];
    $value = $_GET['val'];
    $total = $value  + $val;
    $insert = "UPDATE `fruitdata` SET `Quantity` = '$total' WHERE `fruitdata`.`id` = '$id'";
    echo $id;
    echo $value;
    mysqli_query($link,$insert);
    header("location:adminpanel.php#add");



?>