<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$username','$password','$email','$namalengkap','$alamat')"); 
header('location: login.php')
?>