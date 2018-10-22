
<?php
include('navbar.php');

$sql = "select * from fruitdata";
$i = 0;
$data = mysqli_query($link,$sql);
while ( $row = mysqli_fetch_array( $data ) ) {
echo "<br><br><br><br><br>";
echo $row[1];
$i++;
 $update = "ALTER TABLE  u_registration ADD $row[1] int(10);";
  mysqli_query($link,$update);
 $insert = "UPDATE `u_registration` SET `$row[1]` = '0' ";
mysqli_query($link,$insert);


}



?>
