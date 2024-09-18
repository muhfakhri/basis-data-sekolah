
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Main.css">
</head>
<body>
<?php include "connect.php";?>
<table border="1">

<nav>
<a class="link" href="tambah-siswa.php">Tambah siswa</a>
</nav>

<tr>
    <td>NISN</td>
    <td>Nama-Siswa</td>
    <td>Tanggal-lahir</td>
    <td>Alamat</td>
    <td>Gender</td>
    <td>Id-Kelas</td>
</tr>



<?php

$DataBase = mysqli_query($koneksi,"select * from siswa");
while ($show = mysqli_fetch_array($DataBase)){
?>
<tr>

   <td><?php echo $show ['nisn'];?></td>
   <td><?php echo $show ['nama_siswa'];?></td>
   <td><?php echo $show ['tanggal_lahir'];?></td>
   <td><?php echo $show ['alamat'];?></td>
   <td><?php echo $show ['gender'];?></td>
   <td><?php echo $show ['id_kelas'];?></td>
   <td>
    <a href="delete-siswa.php?id=<?php echo $show['nisn']; ?>">Hapus</a>
    <a href="edit-siswa.php?id=<?php echo $show['nisn']; ?>">edit</a>
   </td>
   
</tr>
<?php
}
?>
</table>
</body>
</html>

