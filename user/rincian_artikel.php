<?php
	include '../config/koneksi.php';
	$id_artikel = $_GET['id_artikel'];
	$result = mysql_fetch_array(mysql_query("SELECT * FROM artikel INNER JOIN user ON artikel.id_user = user.id_user WHERE artikel.id_artikel = '$id_artikel' "));
?>
<html>
	<head>
		<title>Admin | Apunk Foundation</title>
	</head>
		<body>
			<button class="btn btn-success">Rincian Artikel</button> 
			<a href="?page=lihat_artikel" class="btn btn-danger">Kembali</a><hr />
			<h2 align="center"><?php echo $result['judul_artikel']; ?></h2> <br />
			<div class="row">
			  <div class="col-xs-12">
			    <a href="#" class="thumbnail">
			      <img src="foto_artikel/<?php echo $result['foto_artikel']; ?>" alt="">
			    </a>
			  </div>
			</div>
			<p align="justify"><?php echo $result['keterangan']; ?></p><br /><br /><br /><br />
			<p align="right">tanggal posting : <?php echo $result['tanggal_posting']; ?></p>
			<p align="right">diposting oleh  : <?php echo $result['nama_user']; ?></p>
		</body>
</html>