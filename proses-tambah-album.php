<?php
include 'koneksi.php';
session_start();
$namaalbum = $_POST['namaalbum'];
$deskripsi = $_POST['deskripsi'];
$tanggaldibuat = $_POST['tanggaldibuat'];
$userid = $_SESSION['userid'];

$sql = mysqli_query($koneksi, "INSERT INTO album VALUES(NULL,'$namaalbum','$deskripsi','$tanggaldibuat','$userid')");
header('location: album.php');
?>