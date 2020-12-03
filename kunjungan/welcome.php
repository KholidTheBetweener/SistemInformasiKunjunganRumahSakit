<?php
include_once("config.php");
$result1 = mysqli_query($mysqli, "SELECT * FROM kunjungan ORDER BY Nomer ASC");
$result2 = mysqli_query($mysqli, "SELECT * FROM pengawasan ORDER BY id_pasien ASC");
?>
<html>
<head>
	<title>Aplikasi Kunjungan Rumah Sakit</title>
</head>
<body>
	<h2>Selamat Datang Di Sistem Informasi Kunjungan Rumah Sakit</h2>
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>!</h4>
	
	<h5>Kunjungan Pasien</h5>
	<table width='80%' border=1>
    <tr>
        <th>Nomer</th> <th>Tanggal</th> <th>Nama</th> <th>Pasien</th> <th>Kamar</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result1)) {         
        echo "<tr>";
        echo "<td>".$user_data['Nomer']."</td>";
        echo "<td>".$user_data['Tanggal']."</td>";
		echo "<td>".$user_data['Nama']."</td>";    
		echo "<td>".$user_data['Nama_pasien']."</td>";
		echo "<td>".$user_data['Kamar']."</td>";
        echo "</tr>";        
    }
    ?>
    </table>
	<h5>Pengawas Pasien</h5>
	<table width='80%' border=1>

<tr>
	<th>Nomer</th> <th>Nama</th> <th>Kamar</th> <th>Dokter</th> <th>Spesialis</th>
</tr>
<?php  
while($user_data = mysqli_fetch_array($result2)) {         
	echo "<tr>";
	echo "<td>".$user_data['id_pasien']."</td>";
	echo "<td>".$user_data['Nama_pasien']."</td>";
	echo "<td>".$user_data['Kamar']."</td>";    
	echo "<td>".$user_data['Nama_dokter']."</td>";
	echo "<td>".$user_data['Spesialis']."</td>";    
	echo "</tr>";        
}
?>
</table>
<a href="data.php">Atur Database</a>
<br/>
	<a href="logout.php">LOGOUT</a>
</body>
</html>