
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

<tr>
    <td>Nama-Kelas</td>
    <td>Id-Kelas</td>
    
</tr>



<?php

$DataBase = mysqli_query($koneksi,"select * from kelas");
while ($show = mysqli_fetch_array($DataBase)){
?>
<tr>

   <td><?php echo $show ['Nama-kelas'];?></td>
   <td><?php echo $show ['Id-Kelas'];?></td>
    

</tr>
<?php
}
?>
</table>
</body>
</html>

