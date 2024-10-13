<?php include '../connect.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM mapel WHERE id_mapel='$id'");

 header('location: mapel.php');
?>