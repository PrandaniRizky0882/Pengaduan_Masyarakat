<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<div class="container">
        <h1>Register User</h1>
    <form action="../../MasyarakatController.php" method="POST">
        <label for="nik">NIK</label><br>
        <input type="text" name="nik" id="nik" required></br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" required></br>
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" required></br>
        <label for="telp">Telepon</label><br>
        <input type="text" name="telp" id="telp" required></br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required></br>
        <label for="confirm_password">Konfirmasi Password</label><br>
        <input type="password" name="confirm_password" id="confirm_password" required></br>
        <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>






