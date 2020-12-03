<?php
include 'config.php';
$id=$_GET['id'];
mysqli_query($mysqli, "DELETE from pengunjung where Nomer='$id'") or die(mysql_error());
header("location: data.php");
?>