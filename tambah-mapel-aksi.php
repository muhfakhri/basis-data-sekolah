<?php include "connect.php";

$id = $_POST['id_mapel'];
$nama = $_POST['nama_mapel'];
$guru = $_POST['id_guru'];


mysqli_query($koneksi, "INSERT INTO mapel values('$id','$nama','$guru')");
header('location: mapel.php');
?>