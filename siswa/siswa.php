<?php 
include '../connect.php';


$search = isset($_GET['search']) ? $_GET['search'] : '';


$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 5;


$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$start = ($page - 1) * $limit;


if ($search != '') {
    $query = "SELECT * FROM siswa WHERE nama_siswa LIKE '%$search%' LIMIT $start, $limit";
    $count_query = "SELECT COUNT(nisn) AS total FROM siswa WHERE nama_siswa LIKE '%$search%'";
} else {
    
    $query = "SELECT * FROM siswa LIMIT $start, $limit";
    $count_query = "SELECT COUNT(nisn) AS total FROM siswa";
}


$result = mysqli_query($koneksi, $count_query);
$row = mysqli_fetch_array($result);
$total_records = $row['total'];


$total_pages = ceil($total_records / $limit);


$DataBase = mysqli_query($koneksi, $query);
?>


<html>
<head>
<title>Home | admin</title>
<link rel="stylesheet" type="text/css" href="../asset/style.css?v2">
<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css?v2">
</head>
<body>
<nav>
<ul class="kiri">
<li><a href="">ADMIN</a></li>
</ul>
<ul class="kanan">
		<li><a href="">Hello Fakhri</a></li>
		<div style="clear:both"></div>
	</ul>
<ul class="kanan">
</ul><div style="clear:both"></div>
</nav>
<div class="sidebar">
<ul>
    <li><a href="../index.php"><i class="icon-dashboard"></i>Dashboard</a></li>
	<li><a href="../siswa/siswa.php"><i class="icon-group"></i>Data Siswa</a></li>
    <li><a href="../guru/guru.php"><i class="icon-user"></i>Data Guru</a></li>
    <li><a href="../kelas/kelas.php"><i class="icon-sitemap"></i>Data Kelas</a></li>
    <li><a href="../mapel/mapel.php"><i class="icon-book"></i>Data Mapel</a></li>
</ul>
</div>
<div class="main">
    <div class="isimain">
        <span class="span">DATABASE SISWA</span>

      

 <!-- Combined form for show entries and search -->
<form action="siswa.php" method="GET" class="form-container">
    <div class="form-group">
        <label for="entries">Show Entries:</label>
        <select name="limit" id="entries" onchange="this.form.submit()">
            <option value="5" <?= isset($_GET['limit']) && $_GET['limit'] == 5 ? 'selected' : '' ?>>5</option>
            <option value="10" <?= isset($_GET['limit']) && $_GET['limit'] == 10 ? 'selected' : '' ?>>10</option>
            <option value="25" <?= isset($_GET['limit']) && $_GET['limit'] == 25 ? 'selected' : '' ?>>25</option>
            <option value="50" <?= isset($_GET['limit']) && $_GET['limit'] == 50 ? 'selected' : '' ?>>50</option>
            <option value="100" <?= isset($_GET['limit']) && $_GET['limit'] == 100 ? 'selected' : '' ?>>100</option>
        </select>
    </div>

    <!-- Search input positioned below the dropdown -->
    <div class="form-group">
        <input type="text" name="search" placeholder="Cari Nama Siswa" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
    </div>

    <button type="submit">
    <i class="icon-search"></i> Cari
</button>

</form>
      
        <a href="tambah-siswa.php"><button type="submit">
    <i class="icon-plus"></i> TAMBAH</button></a>

        <table border="1">
            
            <tr>
                <td>NISN</td>
                <td>Nama-Siswa</td>
                <td>Alamat</td>
                <td>TTL</td>
                <td>Gender</td>
                <td>ID Kelas</td>
                <td>Action</td>
            </tr>
            
            <?php while ($show = mysqli_fetch_array($DataBase)) { ?>
            <tr>
                <td><?php echo $show['nisn']; ?></td>
                <td><?php echo $show['nama_siswa']; ?></td>
                <td><?php echo $show['alamat']; ?></td>
                <td><?php echo $show['ttl']; ?></td>
                <td><?php echo $show['gender']; ?></td>
                <td><?php echo $show['id_kelas']; ?></td>
                <td>
                    <a href="delete-siswa.php?id=<?php echo $show['nisn']; ?>" class="icon-trash"></a>
                    <a href="edit-siswa.php?id=<?php echo $show['nisn']; ?>" class="icon-edit"></a>
                </td>
            </tr>
            <?php } ?>
        </table>

        <!-- Pagination -->
        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="siswa.php?page=<?= $page - 1 ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="siswa.php?page=<?= $i ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" class="<?= ($page == $i) ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="siswa.php?page=<?= $page + 1 ?>&limit=<?= $limit ?>&search=<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</div>



</body>
</html>
