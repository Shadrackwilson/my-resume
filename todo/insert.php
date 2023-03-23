<?php
echo $list =$_POST['list'];
include 'config.php';
mysqli_query($con, "INSERT INTO `tbltodo`(`list`) VALUES ('$list')");
header('location:index.php');

?>