<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../PengaduanController.php" method="POST">
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" required>
        <label for="laporan">Laporan</label>
        <input type="text" name="laporan" id="laporan" required>
        <label for="nik">Foto</label>
        <input type="text" name="foto" id="foto" required>

        <input type="submit" name="store" value="Tambah pengaduan baru">
    </form>
</body>
</html>