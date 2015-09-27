<?php
	session_start();
	include '../koneksi.php';
	$data_user = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user = '$_SESSION[username]' "));
?>
<html>
	<head>
		<title>Admin | Apunk Foundation</title>
	</head>
		<body>
			<table class="table table-striped table-bordered">
				<tr>
					<th rowspan="10" width="400">
						<img src="foto_user/<?php echo $data_user['foto']; ?>" width="400" height="400" />
					</th>
					<td width="200">Kode User</td>
					<td><?php echo $data_user['id_user']; ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><?php echo $data_user['nama_user']; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><?php echo $data_user['alamat_user']; ?></td>
				</tr>
				<tr>
					<td>Nomor Hp</td>
					<td><?php echo $data_user['nomor_hp_user']; ?></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td><?php echo $data_user['tempat_lahir']; ?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><?php echo $data_user['tanggal_lahir']; ?></td>
				</tr>
				<tr>
					<td>Moto Hidup</td>
					<td><?php echo $data_user['moto_hidup']; ?></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td><?php echo $data_user['jabatan']; ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $data_user['username']; ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?php echo $data_user['password']; ?></td>
				</tr>
			</table>
		</body>
</html>