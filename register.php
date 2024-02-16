<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login - Gallery</title>
</head>
<body>
    <center>
    <table>
        <form action="proses-register.php" method="POST">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Masukan Username Anda" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Masukan Password Anda" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="Masukan Email Anda" required></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" name="namalengkap" placeholder="Masukan Nama Lengkap Anda" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" placeholder="Masukan Alamat Anda" required></td>
        </tr>
        <tr>
            <td><button type="submit">Register</button></td>
        </tr>
        </form>
    </table>
    <a href="login.php">Login</a>
</center> 

</body>
</html>