<?php include 'connect.php'; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Admin</title>
	<link rel="stylesheet" type="text/css" href="asset/style.css?v2">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<nav>
	<ul class="kiri">
		<li><a href="">COntrol Admin</a></li>
	</ul>
	<ul class="kanan">
		<li><a href="">Hello Fakhri</a></li>
		<div style="clear:both"></div>
	</ul>
</nav>
<div class="sidebar">
		<ul>
			<li><a href="index.php"><i class="icon-dashboard"></i>Dashboard</a></li>
			<li><a href="../basis-data-sekolah/siswa/siswa.php"><i class="icon-group"></i>Data Siswa</a></li>
      <li><a href="../basis-data-sekolah/guru/guru.php"><i class="icon-user"></i>Data Guru</a></li>
      <li><a href="../basis-data-sekolah/kelas/kelas.php"><i class="icon-sitemap"></i>Data Kelas</a></li>
      <li><a href="../basis-data-sekolah/mapel/mapel.php"><i class="icon-book"></i>Data Mapel</a></li>
		</ul>
	</div>
<div class="main">
	<div class="isimain">
		<span class="span"> SIMPLE CRUD SYSTEM</span>
		
	


  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span11">
          <a href="siswa">
            <i class="icon-group"></i> <strong>
              <?php $query_soswa=mysqli_query($koneksi,"SELECT count(nisn) FROM siswa");
              $data_soswa=mysqli_fetch_array($query_soswa);
              echo $data_soswa[0];
               ?>
            </strong> <small>Total Siswa</small>
          </a>
        </li>
        <li class="bg_lg span11">
          <a href="kelas">
            <i class="icon-sitemap"></i> <strong>
              <?php $query_kolas=mysqli_query($koneksi,"SELECT count(id_kelas) FROM kelas");
              $data_kolas=mysqli_fetch_array($query_kolas);
              echo $data_kolas[0];
               ?>
            </strong> <small>Total Kelas</small>
          </a>
        </li>
        <li class="bg_ly span11">
          <a href="guru">
            <i class="icon-user"></i> <strong>
              <?php $query_goru=mysqli_query($koneksi,"SELECT count(id_guru) FROM guru");
              $data_goru=mysqli_fetch_array($query_goru);
              echo $data_goru[0];
               ?>
            </strong> <small>Total Guru</small>
          </a>
        </li>
        <li class="bg_ls span11">
          <a href="guru">
            <i class="icon-book"></i> <strong>
              <?php $query_goru=mysqli_query($koneksi,"SELECT count(id_mapel) FROM mapel");
              $data_goru=mysqli_fetch_array($query_goru);
              echo $data_goru[0];
               ?>
            </strong> <small>Total Mapel</small>
          </a>
        </li>
      </ul>
    </div>
<!--End-Action boxes-->
    <hr/>
   
    </div>
  </div>
</div>



  </div>
</div>
</div>
</body>
</html>