<?php include '../connect.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM kelas WHERE id_kelas='$id'");

 header('location: kelas.php');
?>