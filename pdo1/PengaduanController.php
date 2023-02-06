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

        $tgl        = '2023-02-02';
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
        $result = $edit->fetchAll(PDO::FETCH_OBJ);

        header("Location: view/pengaduan/edit.php");
    }

    public function update($request, $id)
    {
        $tgl    = $request['tgl'];
        $nik    = $request['nik'];
        $isi    = $request['isi'];
        $foto   = $request['foto'];
        $status = $request['status'];

        $query = "UPDATE pengaduan SET tgl_pengaduan = '$tgl', nik = '$isi', isi_laporan = '$isi', foto = '$foto', status = '$status' WHERE id = $id";
        $store = $this->pdo->prepare($query);
        $store->execute();

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

// if (isset($_GET['delete'])) {
//     $pengaduan->delete($_GET['id']);
// }