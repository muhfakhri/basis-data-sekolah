<?php include '../connect.php';

$nama = $_POST['nama_kelas'];
$id = $_POST['id_kelas'];

mysqli_query($koneksi, "INSERT INTO kelas values('$id','$nama')");
header('location: kelas.php');
?>
