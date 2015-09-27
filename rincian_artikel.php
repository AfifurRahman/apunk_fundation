<?php
	include 'koneksi.php';
	$id_artikel = $_GET['id_artikel'];
	$result = mysql_fetch_array(mysql_query("SELECT * FROM artikel INNER JOIN user On artikel.id_user = user.id_user WHERE artikel.id_artikel = '$id_artikel' LIMIT 10 "));
?>
<html>
	<head>
		<title>Apunk Foundation</title>
		<link rel="shortcut icon" href="gambar/logo.png" />
	</head>
		<body>
			<div id="header-judul">
				<h3> >> Artikel Saya</h3>
			</div>
			<p><i>Oleh : <?php echo $result['nama_user']; ?></i> | <i><?php echo $result['tanggal_posting']; ?></i></p>
			<h2 align="center"><?php echo $result['judul_artikel']; ?></h2>
			<img src="user/foto_artikel/<?php echo $result['foto_artikel']; ?>" width="960" height="600" />
			<p align="justify">
				<?php echo $result['keterangan']; ?>
			</p> <br /><br />
			<h3 style="color:#900000;">Artikel lainnya >></h3>
			<?php
				$query = mysql_query("SELECT * FROM artikel");
				while($data_artikel = mysql_fetch_row($query)){
			?>
			<a href="?page=rincian_artikel&id_artikel=<?php echo $data_artikel[0]; ?>" style="text-decoration:none;" ><?php echo $data_artikel[1]; ?></p></a> <hr />
			<?php
				}
			?>
		</body>
</html>