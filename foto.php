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
    <title>Data Foto</title>
</head>
<body>
    <ul>
        <li><a href="foto.php">Data Foto</a></li>
        <li><a href="album.php">Data Album</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="logout.php">Keluar</a></li>
    </ul>
    <table>
        <form action="proses-tambah-foto.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Judul Foto</td>
            <td><input type="text" name="judulfoto"></td>
        </tr>
        <tr>
            <td>Deskripsi Foto</td>
            <td><input type="text" name="deskripsifoto"></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" accept="image/*" name="lokasifile"></td>
        </tr>
        <tr>
            <td>Nama Album</td>
            <td>
                <select name="albumid" id="">
                    <?php
                    include 'koneksi.php';
                    $userid = $_SESSION['userid'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM album WHERE userid=$userid");
                    while($data = mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?=$data['AlbumID']?>"><?=$data['NamaAlbum']?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button type="submit">Tambah</button></td>
        </tr>
        </form>
    </table>
    <br>
    <hr>
    <center>
    <table border="2" cellpadding="13" style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" cellspacing="0">
    <tr>
        <td>Foto ID</td>
        <td>Judul Foto</td>
        <td>Deskripsi</td>
        <td>Foto</td>
        <td>Album ID</td>
        <td>User ID</td>
        <td>Aksi</td>
    </tr>
    <?php 
        include 'koneksi.php';
        $userid = $_SESSION['userid'];
        $sql = mysqli_query($koneksi, "SELECT * FROM foto WHERE UserID=$userid");
        while($data = mysqli_fetch_array($sql)) {
        ?>
    <tr>
        <td><?=$data['FotoID']?></td>
        <td><?=$data['judulfoto']?></td>
        <td><?=$data['DeskripsiFoto']?></td>
        <td><img src="media/<?=$data['LokasiFile']?>" alt=""></td>
        <td><?=$data['AlbumID']?></td>
        <td><?=$data['UserID']?></td>
        <td>
            <a href="form-edit.php?fotoid=<?=$data['FotoID']?>">Edit</a><br>
            <a href="proses-hapus-foto.php?fotoid=<?=$data['FotoID']?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
    </table>
    </center>
</body>
</html>