<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $Nama=$_POST['Nama'];
    $Kamar=$_POST['Kamar'];
    $result = mysqli_query($mysqli, "UPDATE pasien SET Nama_pasien='$Nama',Kamar='$Kamar' WHERE id_pasien=$id");
    header("Location: data.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM pasien WHERE id_pasien=$id");
while($user_data = mysqli_fetch_array($result))
{
    $Nama = $user_data['Nama_pasien'];
    $Kamar = $user_data['Kamar'];
}
?>
<html>
<head>  
    <title>Edit Data Pasien</title>
</head>
<body>
    <a href="data.php">Home</a>
    <br/><br/>

    <h2>Edit Informasi Pasien</h2>

    <form name="update_user" method="post" action="editsick.php">
        <table border="0">
        <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Kamar</td>
                <td><input type="Number" name="Kamar" value=<?php echo $Kamar;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
