<?php
include_once("config.php");
$admin = mysqli_query($mysqli, "SELECT * FROM admin ORDER BY id_admin ASC");
$dokter = mysqli_query($mysqli, "SELECT * FROM dokter ORDER BY id_dokter ASC");
$pasien = mysqli_query($mysqli, "SELECT * FROM pasien ORDER BY id_pasien ASC");
$pengunjung =  mysqli_query($mysqli, "SELECT * FROM pengunjung ORDER BY Nomer ASC");
?>
<html>
<head>
	<title>Pengaturan Database</title>
</head>
    <h2>Admin</h2>
    <a href="adduser.php">Tambah Pengguna</a><br/>
    <table width='80%' border=1>
    <tr>
        <th>Nomer</th> <th>Nama</th><th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($admin)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_admin']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td><a href='edituser.php?id=$user_data[id_admin]'>Edit</a> | <a href='deleteuser.php?id=$user_data[id_admin]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
    <h2>Pengunjung</h2>
    <a href="addvisit.php">Tambah Data</a>
    <table width='80%' border=1>
    <tr>
        <th>Nomer</th> <th>Nama</th> <th>Kamar</th> <th>Tanggal Kunjungan</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($pengunjung)) {         
        echo "<tr>";
        echo "<td>".$user_data['Nomer']."</td>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['Kamar']."</td>";    
        echo "<td>".$user_data['Tanggal']."</td>";
        echo "<td><a href='editvisit.php?id=$user_data[Nomer]'>Edit</a> | <a href='deletevisit.php?id=$user_data[Nomer]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
    <h2>Pasien</h2>
    <a href="addsick.php">Tambah Data</a>
    <table width='80%' border=1>
    <tr>
        <th>ID</th> <th>Nama</th> <th>Kamar</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($pasien)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_pasien']."</td>";
        echo "<td>".$user_data['Nama_pasien']."</td>";
        echo "<td>".$user_data['Kamar']."</td>";    
        echo "<td><a href='editsick.php?id=$user_data[id_pasien]'>Edit</a> | <a href='deletesick.php?id=$user_data[id_pasien]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
    <h2>Dokter</h2>
    <a href="addcure.php">Tambah Data</a>
    <table width='80%' border=1>
    <tr>
        <th>ID</th> <th>Nama</th> <th>Telepon</th> <th>Spesialis</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($dokter)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_dokter']."</td>";
        echo "<td>".$user_data['Nama_dokter']."</td>";
        echo "<td>".$user_data['Tlp']."</td>";    
        echo "<td>".$user_data['Spesialis']."</td>";
        echo "<td><a href='editcure.php?id=$user_data[id_dokter]'>Edit</a> | <a href='deletecure.php?id=$user_data[id_dokter]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
    <br/>
<a href="welcome.php">Selesai</a>
</body>
</html>