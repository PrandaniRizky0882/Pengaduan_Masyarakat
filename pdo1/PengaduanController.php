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
         * dan untuk mengambil parameter request pada update
         */

        $tgl        = $request['tgl_pengaduan'];
        $nik        = $request['nik'];
        $laporan    = $request['laporan'];
        $status     = 0;
        // $foto       = $request['foto'];
        $foto       = $_FILES['foto']['name']; // untuk membuat variabel foto dan mengambil nama file yang diupload
        $tmp        = $_FILES['foto']['tmp_name']; // mengambil url/path folder tempat penyiompanan sementara file

        $fotobaru = date('dmYHis').$foto; // berfungsi untuk merename foto dan tanggal upload

        $path = "img/".$fotobaru; // untu mengset path / folder tempat menyimpan foto
        if(move_uploaded_file($tmp,$path)){ // verify apakah gambar berhasil ditambahkan atau tidak dan utk menyimpan gambar kefolder yg diperintahkan
            // proses query utk menyimpan data dalam databases
        $query = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tgl', '$nik', '$laporan', '$fotobaru', '$status')";
        $store = $this->pdo->prepare($query);
        $store->execute(); // esekusi untuk query

        echo "<script>
            alert('Berhasil mengajukan pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
        } else {

            echo "<script>
            alert('Gagal Menambahkan data, Mohon Cek Kembali!')
            window.location.href='view/pengaduan/create.php'
            </script>";
        }
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
        // Ambil data foto yang dipilih dari form
        $foto       = $_FILES['foto']['name'];
        $tmp        = $_FILES['foto']['tmp_name']; 

        $query = "SELECT foto FROM pengaduan WHERE id_pengaduan = $id";
        $index = $this->pdo->prepare($query);
        $index->execute();
        $result = $index->fetch(PDO::FETCH_OBJ);



        if (empty($foto)) { // jika user tida memilih menggunakan / mengganti foto
        $query = "UPDATE pengaduan SET nik = '$nik', isi_laporan = '$laporan' WHERE id_pengaduan = $id";
        $update = $this->pdo->prepare($query);
        $update->execute(); // utk mengeksekusi query untuk mengupdate data

        echo "<script>
            alert('Berhasil mengubah pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
        } else {
            
        $fotobaru = date('dmYHis').$foto; 
        

        $path = "img/".$fotobaru; // untu mengset path / folder tempat menyimpan foto
        if(move_uploaded_file($tmp,$path)){ // verify apakah gambar berhasil ditambahkan atau tidak dan utk menyimpan gambar kefolder yg diperintahkan
            // proses query utk menyimpan data dalam databases
        $query = "UPDATE pengaduan SET foto = '$fotobaru' WHERE id_pengaduan = $id";
        $store = $this->pdo->prepare($query);
        unlink("img/".$result->foto); // berfungsi untuk merename foto dan tanggal upload dan result diambil dari show
        $store->execute(); // esekusi untuk query


    //     if(is_file("img/".$update['foto'])) // Jika foto ada      
    //    // Hapus file foto sebelumnya yang ada di folder images

        echo "<script>
            alert('Berhasil mengubah pengaduan dan gambar!')
            window.location.href='view/pengaduan/index.php'
            </script>";
        }
       
    }

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
    $pengaduan->store($_POST, $_FILES); // parameter super global post(request) dan file
}

if (isset($_POST['delete'])) {
    $pengaduan->destroy($_GET['id']); // parameter super global get(id)
}

if (isset($_POST['update'])) {
    $pengaduan->update($_POST, $_GET['id']); // parameter super global get(id) dan post(request) 
}


