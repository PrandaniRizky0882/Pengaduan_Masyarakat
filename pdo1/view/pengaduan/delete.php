<?php 

include '../../PengaduanController.php';

$id_pengaduan = $_GET['id'];
$destroy = $pengaduan->destroy($id_pengaduan);

// $msql = 'DELETE FROM pengaduan WHERE id_pengaduan="'.$id_pengaduan.'"';
// $query = mysqli_query($query,$msql);
header('location: index.php');
?>