<?php
	include 'koneksi.php';
	$select_gallery = mysql_query("SELECT * FROM foto_gallery INNER JOIN user ON foto_gallery.id_user = user.id_user");
?>
<html>
	<head>
		<title>Apunk Foundation</title>
		<link rel="shortcut icon" href="gambar/logo.png" />
	</head>
		<body>
			<div id="header-judul">
				<h3> >> Gallery Apunk Foundation</h3>
			</div>
			<div class="foto-gallery">
				<ul>
					<?php
						while($data = mysql_fetch_row($select_gallery)){
					?>
					<li>
						<a href="?page=rincian_gallery&id_foto=<?php echo $data[0]; ?>"><img src="user/foto_gallery/<?php echo $data[2]; ?>" /></a>
						<p><?php echo $data[1]; ?></p>
						<p>Oleh : <?php echo $data[5]; ?></p>
					</li>
					<?php
						}
					?>
				</ul>
			</div>
			<div style="clear:both;">
		</body>
</html>