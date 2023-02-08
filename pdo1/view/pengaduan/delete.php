<?php 

include '../../PengaduanController.php';

$id_pengaduan = $_GET['id']; // sebagai parameter id mengunakan super global get
$destroy = $pengaduan->destroy($id_pengaduan);

header('location: index.php');
?>