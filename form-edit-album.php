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
    <title>Form Edit Album</title>
</head>
<body>
    <ul>
        <li><a href="foto.php">Data Foto</a></li>
        <li><a href="album.php">Data Album</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="logout.php">Keluar</a></li>
    </ul>
    <table>
        <form action="proses-edit-album.php" method="POST">
        <?php
        include 'koneksi.php';
        $userid = $_SESSION['userid'];
        $albumid = $_GET['albumid'];
        $sql = mysqli_query($koneksi, "SELECT * FROM album WHERE albumid=$albumid");
        while($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td>Nama Album</td>
            <td><input type="text" value="<?=$data['NamaAlbum']?>" name="namaalbum"></td>
            <td><input type="hidden" value="<?=$albumid?>" name="albumid"></td>
        </tr>
        <tr>
            <td>Deskripsi Album</td>
            <td><input type="text" value="<?=$data['Deskripsi']?>" name="deskripsi"></td>
        </tr>
        <tr>
            <td><button type="submit">Edit</button></td>
        </tr>
        <?php } ?>
        </form>
    </table>
</body>
</html>