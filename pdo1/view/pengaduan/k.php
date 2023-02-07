<!-- <?php 

include '../../PengaduanController.php';

$id_pengaduan = $_GET['id'];
$update = $pengaduan->update($id_pengaduan);

$sql = "UPDATE pengaduan SET tgl_pengaduan = '$tgl', nik = '$isi', isi_laporan = '$isi', foto = '$foto', status = '$status' WHERE id_pengaduan = $id";
$query = mysqli_query($query,$sql);
header('location: index.php');
?> -->