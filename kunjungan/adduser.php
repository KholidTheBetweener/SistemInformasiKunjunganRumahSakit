<html>
<head>
    <title>Tambah Pengguna</title>
</head>
<body>
    <a href="data.php">Kembali</a>
    <br/><br/>
    <h2>Tambahkan Pengguna</h2>
    <form action="adduser.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nomer</td>
                <td><input type="number" name="id_admin"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['Submit'])) {
        $id_admin = $_POST['id_admin'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO admin(id_admin,username,password) VALUES('$id_admin','$username',MD5('$password'))");
        echo "User added successfully. <a href='data.php'>Lihat Pengguna</a>";
    }
    ?>
</body>
</html>
