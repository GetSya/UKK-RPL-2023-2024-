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
    <title>Halaman Album - Gallery</title>
</head>

<body>
    <ul>
        <li><a href="foto.php">Data Foto</a></li>
        <li><a href="album.php">Data Album</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="logout.php">Keluar</a></li>
    </ul>
    <table>
        <form action="proses-tambah-album.php" method="POST">
    <tr>
        <td>Masukan Nama Album</td>
        <td><input type="text" name="namaalbum"></td>
    </tr>
    <tr>
        <td>Masukan Deskripsi</td>
        <td><input type="text" name="deskripsi"></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td><input type="text" readonly value="<?=date("Y-m-d")?>" name="tanggaldibuat"></td>
    </tr>
    <tr>
        <td><button type="submit">Create</button></td>
    </tr>
</form>
    </table>
    <hr>
    <br>
    <center>
    <table border="2" cellpadding="13" style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" cellspacing="0">
        <tr>
            <td>Nama Album</td>
            <td>Deskripsi</td>
            <td>Tanggal Dibuat</td>
            <td>Aksi</td>
        </tr>
        <?php
            include 'koneksi.php';
            $userid = $_SESSION['userid'];
            $sql = mysqli_query($koneksi, "SELECT * FROM album WHERE userid=$userid");
            while($data = mysqli_fetch_array($sql)) {
                ?>
                <tr> 
            <td><?=$data['NamaAlbum']?></td>
            <td><?=$data['Deskripsi']?></td>
            <td><?=$data['TanggalDibuat']?></td>
            <td>
                <a href="form-edit-album.php?albumid=<?=$data['AlbumID']?>">Edit</a><br>
                <a href="proses-hapus-album.php?albumid=<?=$data['AlbumID']?>">Hapus</a>
            </td>
        </tr>    
            <?php } ?>
            </center>
    </table>
</body>
</html>