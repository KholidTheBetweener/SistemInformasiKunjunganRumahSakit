<?php
include 'config.php';
$id=$_GET['id'];
mysqli_query($mysqli, "DELETE from dokter where id_dokter='$id'") or die(mysql_error());
header("location: data.php");
?>