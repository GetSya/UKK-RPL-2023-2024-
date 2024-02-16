<?php 
include 'koneksi.php';
session_start();
$namaalbum = $_POST['namaalbum'];
$deskripsi = $_POST['deskripsi'];
$albumid = $_POST['albumid'];

$sql = mysqli_query($koneksi, "UPDATE album SET NamaAlbum='$namaalbum', Deskripsi='$deskripsi' WHERE AlbumID=$albumid");
header('location: album.php');
?>