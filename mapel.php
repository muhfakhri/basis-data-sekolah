
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
<a class="link" href="tambah-mapel.php">Tambah mapel</a>
</nav>

<?php include "connect.php";?>
<table border="1">

<tr>
    <td>Id-Mapel</td>
    <td>Nama-Mapel</td>
    <td>Id-Guru</td>
    
</tr>



<?php

$DataBase = mysqli_query($koneksi,"select * from mapel");
while ($show = mysqli_fetch_array($DataBase)){
?>
<tr>

   <td><?php echo $show ['Id-Mapel'];?></td>
   <td><?php echo $show ['Nama-Mapel'];?></td>
   <td><?php echo $show ['Id-Guru'];?></td>
 

</tr>
<?php
}
?>
</table>
</body>
</html>

