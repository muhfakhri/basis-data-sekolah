
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Main.css">
</head>
<body>
<nav>
<a class="link" href="tambah-guru.php">Tambah guru</a>
</nav>
<?php include "connect.php";?>
<table border="1">

<tr>
    <td>Id-Guru</td>
    <td>Nama-Guru</td>
    <td>Alamat</td>
    <td>Gender</td>
    <td>Tanggal-Lahir</td>
    <td>Telp</td>
</tr>



<?php

$DataBase = mysqli_query($koneksi,"select * from guru");
while ($show = mysqli_fetch_array($DataBase)){
?>
<tr>

   <td><?php echo $show ['Id-Guru'];?></td>
   <td><?php echo $show ['Nama-Guru'];?></td>
   <td><?php echo $show ['Alamat'];?></td>
   <td><?php echo $show ['Gender'];?></td>
   <td><?php echo $show ['Tanggal-Lahir'];?></td>
   <td><?php echo $show ['Telp'];?></td>

</tr>
<?php
}
?>
</table>
</body>
</html>

