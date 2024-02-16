<?php
include 'koneksi.php';
$fotoid = $_GET['fotoid'];

$sql = mysqli_query($koneksi, "DELETE FROM foto WHERE fotoid=$fotoid");
header('location: foto.php')
?>