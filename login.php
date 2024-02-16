<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login - Gallery</title>
    <style>
        .box {
            border: 2px solid black;
            border-radius: 12px 12px;
            width: 700px;
            height: 200px;
            background-color: lightblue;
        }
        body {
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <table>
        <center>
        <div class="box">
        <form action="proses-login.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Masukan Username Anda" required>
        
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukan Password Anda" required>
        
            <p><button type="submit">Login</button></p>
            </div>
        </form>
        <a href="register.php">Belum Punya Akun?Daftar Sekarang!</a>
    </center>
</body>
</html>