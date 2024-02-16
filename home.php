<?php 
session_start();
if (!isset($_SESSION['userid'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama - Gallery</title>
</head>
<body>
<ul>
        <li><a href="foto.php">Data Foto</a></li>
        <li><a href="album.php">Data Album</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="logout.php">Keluar</a></li>
    </ul>
    <h2 align="center" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Selamat Datang <?=$_SESSION['namalengkap']?></h2>
    <center>
        <table border="2" cellpadding="13" style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" cellspacing="0">
            <tr>
                <td>Nama</td>
                <td>Nama Lengkap</td>
                <td>Email</td>
                <td>Alamat</td>
            </tr>
            <tr>
                <td><?=$_SESSION['username']?></td>
                <td><?=$_SESSION['namalengkap']?></td>
                <td><?=$_SESSION['email']?></td>
                <td><?=$_SESSION['alamat']?></td>
            </tr>
        </table>
    </center>
</body>
</html>