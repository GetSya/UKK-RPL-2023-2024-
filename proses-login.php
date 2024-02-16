<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($sql);

if ($cek == 1) {
    while($data = mysqli_fetch_array($sql)) {
        $_SESSION['userid'] = $data['UserID'];
        $_SESSION['username'] = $data['Username'];
        $_SESSION['namalengkap'] = $data['NamaLengkap'];
        $_SESSION['alamat'] = $data['Alamat'];
        $_SESSION['email'] = $data['Email'];
        $_SESSION['alamat'] = $data['Alamat'];
    }
    header('location: home.php');
} else {
    echo "<script>alert('Login Gagal')</script>";
    header('location: login.php');
}
?>