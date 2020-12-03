<?php
include 'config.php';
$id=$_GET['id'];
mysqli_query($mysqli, "DELETE from admin where id_admin='$id'") or die(mysql_error());
header("location: data.php");
?>