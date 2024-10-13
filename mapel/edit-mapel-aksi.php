<?php include "../connect.php";
$id = $_POST['id_mapel'];
$nama = $_POST['nama_mapel'];

mysqli_query($koneksi, "UPDATE mapel SET nama_mapel='$nama' WHERE id_mapel='$id'");

header('location: mapel.php');
?>