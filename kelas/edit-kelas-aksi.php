<?php include '../connect.php';

$nama = $_POST['nama_kelas'];
$id = $_POST['id_kelas'];

mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$nama' WHERE id_kelas='$id'");
header('location: kelas.php');
?>
