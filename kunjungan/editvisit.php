<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $Nama=$_POST['Nama'];
    $Kamar=$_POST['Kamar'];
    $Tanggal=$_POST['Tanggal'];
    $result = mysqli_query($mysqli, "UPDATE pengunjung SET Nama='$Nama',Kamar='$Kamar',Tanggal='$Tanggal' WHERE Nomer=$id");
    header("Location: data.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM pengunjung WHERE Nomer=$id");
while($user_data = mysqli_fetch_array($result))
{
    $Nama = $user_data['Nama'];
    $Kamar = $user_data['Kamar'];
    $Tanggal = $user_data['Tanggal'];
}
?>
<html>
<head>  
    <title>Edit Data Pengunjung</title>
</head>
<body>
    <a href="data.php">Home</a>
    <br/><br/>
    <h2>Edit Informasi Pengunjung</h2>
    <form name="update_user" method="post" action="editvisit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>Kamar</td>
                <td><input type="number" name="Kamar" value=<?php echo $Kamar;?>></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="text" name="Tanggal" value=<?php echo $Tanggal;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
