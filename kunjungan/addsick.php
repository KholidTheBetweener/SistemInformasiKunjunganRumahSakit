<html>
<head>
    <title>Tambah Pasien</title>
</head>
<body>
    <a href="data.php">Kembali</a>
    <br/><br/>
    <h2>Tambah Pasien</h2>
    <form action="addsick.php" method="post" name="form1">
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
                <td>Kamar</td>
                <td><input type="number" name="Kamar"></td>
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
        $Kamar = $_POST['Kamar'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO pasien(id_pasien,Nama_pasien,Kamar) VALUES('$id','$Nama','$Kamar')");
        echo "Data added successfully. <a href='data.php'>Lihat Data</a>";
    }
    ?>
</body>
</html>
