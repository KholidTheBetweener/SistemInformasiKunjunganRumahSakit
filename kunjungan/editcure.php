<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $Nama=$_POST['Nama'];
    $Tlp=$_POST['Tlp'];
    $Spesialis=$_POST['Spesialis'];
    $result = mysqli_query($mysqli, "UPDATE dokter SET Nama_dokter='$Nama',Tlp='$Tlp',Spesialis='$Spesialis' WHERE id_dokter=$id");
    header("Location: data.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM dokter WHERE id_dokter=$id");
while($user_data = mysqli_fetch_array($result))
{
    $Nama = $user_data['Nama_dokter'];
    $Tlp = $user_data['Tlp'];
    $Spesialis = $user_data['Spesialis'];
}
?>
<html>
<head>  
    <title>Edit Data Dokter</title>
</head>
<body>
    <a href="data.php">Home</a>
    <br/><br/>
    <h2>Edit Informasi Dokter</h2>
    <form name="update_user" method="post" action="editcure.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="Tlp" value=<?php echo $Tlp;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="Spesialis" value=<?php echo $Spesialis;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
