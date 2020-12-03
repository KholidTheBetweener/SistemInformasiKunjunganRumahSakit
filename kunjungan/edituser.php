<?php
include_once("config.php");
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result = mysqli_query($mysqli, "UPDATE admin SET username='$username',password=MD5('$password') WHERE id_admin=$id");
    header("Location: data.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM admin WHERE id_admin=$id");
while($user_data = mysqli_fetch_array($result))
{
    $username = $user_data['username'];
    $password = $user_data['password'];
}
?>
<html>
<head>  
    <title>Edit Admin</title>
</head>

<body>
    <a href="data.php">Kembali</a>
    <br/><br/>
    <h2>Edit User</h2>
    <form name="update_user" method="post" action="edituser.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="username" value=<?php echo $username;?>></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password" value=<?php echo $password;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
