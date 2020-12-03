<html>
<head>
    <title>Tambah Pengunjung</title>
</head>
<body>
    <a href="data.php">Kembali</a>
    <br/><br/>
    <h2>Tambah Pengunjung</h2>
    <form action="addvisit.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nomer</td>
                <td><input type="number" name="Nomer"></td>
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
                <td>Tanggal Kunjungan</td>
                <td><input type="text" name="Tanggal"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['Submit'])) {
        $Nomer = $_POST['Nomer'];
        $Nama = $_POST['Nama'];
        $Kamar = $_POST['Kamar'];
        $Tanggal = $_POST['Tanggal'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO pengunjung(Nomer,Nama,Kamar,Tanggal) VALUES('$Nomer','$Nama','$Kamar','$Tanggal')");
        echo "Data added successfully. <a href='data.php'>Lihat Data</a>";
    }
    ?>
</body>
</html>
