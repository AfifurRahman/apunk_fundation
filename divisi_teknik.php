<?php
	include 'koneksi.php';
	$data_user = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user = 'ARS' "));
?>
<html>
	<head>
		<title>Apunk Foundation</title>
		<link rel="shortcut icon" href="gambar/logo.png" />
	</head>
		<body>
			<div id="header-judul">
				<h3> >> Ketua Apunk Foundation</h3>
			</div>
			<div id="table-data">
				<table border="0" cellspacing="0">
					<tr>
						<td rowspan="7"><img src="user/foto_user/<?php echo $data_user['foto']; ?>" width="300" height="350" /></td>
						<th>Nama Lengkap</th>
						<td width="30" align="center"> : </td>
						<td><?php echo $data_user['nama_user']; ?></td>
					</tr>
					<tr>
						<th>Alamat</th>
						<td width="30" align="center"> : </td>
						<td><?php echo $data_user['alamat_user']; ?></td>
					</tr>
					<tr>
						<th>Nomor HP</th>
						<td width="30" align="center"> : </td>
						<td><?php echo $data_user['nomor_hp_user']; ?></td>
					</tr>
					<tr>
						<th>Tempat Lahir</th>
						<td width="30" align="center"> : </td>
						<td><?php echo $data_user['tempat_lahir']; ?></td>
					</tr>
					<tr>
						<th>Tanggal Lahir</th>
						<td width="30" align="center"> : </td>
						<td><?php echo $data_user['tanggal_lahir']; ?></td>
					</tr>
					<tr>
						<th>Moto Hidup</th>
						<td width="30" align="center"> : </td>
						<td><?php echo $data_user['moto_hidup']; ?></td>
					</tr>
					<tr>
						<th>Jabatan</th>
						<td width="30" align="center"> : </td>
						<td><?php echo $data_user['jabatan']; ?></td>
					</tr>
				</table>
			</div>
		</body>
</html>