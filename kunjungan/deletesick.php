<?php
include 'config.php';
$id=$_GET['id'];
mysqli_query($mysqli, "DELETE from pasien where id_pasien='$id'") or die(mysql_error());
header("location: data.php");
?>