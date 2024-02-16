<?php
include 'koneksi.php';
$albumid = $_GET['albumid'];

$sql = mysqli_query($koneksi, "DELETE FROM album WHERE AlbumID=$albumid");
header('location: album.php')
?>