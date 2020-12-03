<html>
<head>
    <title>Tambah Dokter</title>
</head>
<body>
    <a href="data.php">Kembali</a>
    <br/><br/>
    <h2>Tambah Dokter</h2>
    <form action="addcure.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>Telepon</td>
                <td><input type="text" name="Tlp"></td>
            </tr>
            <tr> 
                <td>Spesialis</td>
                <td><input type="text" name="Spesialis"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $Nama = $_POST['Nama'];
        $Tlp = $_POST['Tlp'];
        $Spesialis = $_POST['Spesialis'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO dokter(id_dokter,Nama_dokter,Tlp,Spesialis) VALUES('$id','$Nama','$Tlp','$Spesialis')");
        echo "Data added successfully. <a href='data.php'>Lihat Data</a>";
    }
    ?>
</body>
</html>
