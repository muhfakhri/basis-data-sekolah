<?php include "connect.php";

$id = $_POST['id_guru'];
$nama = $_POST['nama_guru'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$ttg = $_POST['tanggal_lahir'];
$Telp = $_POST['telp'];

mysqli_query($koneksi, "INSERT INTO guru values('$id','$nama','$alamat','$gender','$ttg','$Telp')");
header('location: Guru.php');
?>