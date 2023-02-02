<?php
include '../../PengaduanController.php';
$index = $pengaduan->index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pengaduan</title>
</head>
<body>
    <h1>List Pengaduan Masyarakat</h1>
    <?php if ($index != null) : ?>
        <?php foreach ($index as $i) : ?>
            <tr>
            <td><p>Tanggal : </p></td><br>
            <p><?= $i->tgl_pengaduan ?></p><br>
            <p>NIK : </p><br>
            <p><?= $i->nik ?></p><br>
            <p>Laporan : </p><br>
            <p><?= $i->isi_laporan ?></p><br>
            <p>Foto : </p><br>
            <p><?= $i->foto ?></p><br>
            <p>Status : </p><br>
            <?php if ($i->status == 0) : ?>
                <p>Belum diproses</p>
            <?php elseif ($i->status == 'proses') : ?>
                <p>Sedang diproses</p>
            <?php elseif ($i->status == 'selesai') : ?>
                <p>Selsai diproses</p>
            <?php endif ; ?>
            <p><?= $i->status ?></p><br>
        <?php endforeach; ?>
    <?php else : ?>
        <h3>List Pengaduan Masih Kosong</h3>
    <?php endif; ?>
</body>
</html>