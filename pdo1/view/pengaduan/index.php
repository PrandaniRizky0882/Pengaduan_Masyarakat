<?php 
include '../../PengaduanController.php';
$index = $pengaduan->index();

var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
</head>
<body>
    <h1>List Pengaduan Masyarakat</h1>
    <?php if ($index != null) : ?>
        <? foreach ($index as $i) : ?>
        <div class="card">
            <p>Tanggal :</p><br>
            <p><?= $i->tgl_pengaduan ?></p><br>
            <p>Nik : </p><br>
            <p><?= $i->nik ?></p><br>
            <p>Laporan : </p><br>
            <p><?= $i->isi_laporan ?></p><br>
            <p>Foto : </p><br>
            <p><?= $i->foto ?></p><br>
            <p>Status : </p><br>
            <?php if ($i->status == 0) : ?>
                <p>Belum Diproses</p>
                <?php elseif ($i->status == 'proses') : ?>
                    <p>sedang diproses</p>
                    <?php elseif ($i->status == 'selesai') : ?>
                        <p>selesai Diproses</p>
                        <?php endif; ?>
                        <p><?= $i->status ?></p><br>
                    </div>
                    <? endforeach; ?>
                <?php else : ?>
                <h3>LIst Pengaduan masih kosong</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>