<?php

include 'ConnectPDO.php';

class PengaduanController extends ConnectPDO {
    public function index()
    {
        /**
         * Menampilkan semua pengaduan yang di ajukan
         */
        
        $query = "SELECT * FROM pengaduan";
        $index = $this->pdo->prepare($query);
        $index->execute();
        $result = $index->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function create()
    {
        header("Location: view/pengaduan/create.php");
    }
    
    public function store($request)
    {
        /**
         * Mengajukan pengaduan baru
         */

        $tgl        = $request['tgl_pengaduan'];
        $nik        = $request['nik'];
        $laporan    = $request['laporan'];
        $foto       = $request['foto'];
        $status     = 0;

        $query = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tgl', '$nik', '$laporan', '$foto', '$status')";
        $store = $this->pdo->prepare($query);
        $store->execute();

        echo "<script>
            alert('Berhasil mengajukan pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
    }

    public function show($id)
    {
        $query = "SELECT*FROM pengaduan WHERE id_pengaduan = $id";
        $show = $this->pdo->prepare($query);
        $show->execute();
        $result = $show->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function edit($id)
    {
        $query = "SELECT * FROM pengaduan WHERE id_pengaduan = $id";
        $edit = $this->pdo->prepare($query);
        $edit->execute();
        $result = $edit->fetch(PDO::FETCH_OBJ);
        return $result;

    }

    public function update($request, $id)
    {

        $nik        = $request['nik'];
        $laporan    = $request['isi_laporan'];
        $foto       = $request['foto'];

        $query = "UPDATE pengaduan SET nik = '$nik', isi_laporan = '$laporan', foto = '$foto' WHERE id_pengaduan = $id";
        $update = $this->pdo->prepare($query);
        $update->execute();

        echo "<script>
            alert('Berhasil mengubah pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
    }

    public function destroy($id)
    {
        $query = "DELETE FROM pengaduan WHERE id_pengaduan = $id";
        $delete = $this->pdo->prepare($query);
        $delete->execute();


        echo "<script>
            alert('Berhasil membatalkan pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
    }
}

$pengaduan = new PengaduanController();

if (isset($_POST['store'])) {
    $pengaduan->store($_POST);
}

if (isset($_POST['destroy'])) {
    $pengaduan->store($_POST);
}

if (isset($_POST['update'])) {

    $pengaduan->update($_POST, $_GET['id']);
}


