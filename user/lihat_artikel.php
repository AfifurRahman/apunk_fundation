<html>
	<head>
		<title>Admin | Apunk Foundation</title>
	</head>
		<body>
			<?php
				$notif = $_GET['notif'];
				if ($notif==1) {
					echo "
						<div class='alert alert-success alert-dismissible' role='alert'>
						  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							  <span aria-hidden='true'>&times;</span>
							</button>
						  	<strong>Sukses!</strong> Data artikel berhasil ditambah
						</div>
					";
				}elseif($notif==2){
					echo "
						<div class='alert alert-success alert-dismissible' role='alert'>
						  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						  <strong>Sukses!</strong> Data artikel berhasil diedit
						</div>
					";
				}elseif($notif==3){
					echo "
						<div class='alert alert-success alert-dismissible' role='alert'>
						  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						  <strong>Sukses!</strong> Data artikel berhasil dihapus
						</div>
					";
				}
			?>
			<button class="btn btn-success">Lihat Artikel</button> <hr />
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th width="350">Judul Artikel</th>
						<th>Keterangan</th>
						<th>Tgl Posting</th>
						<th>Diposting oleh</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include '../koneksi.php';
						$query = mysql_query("SELECT * FROM artikel INNER JOIN user ON artikel.id_user = user.id_user WHERE user.id_user = '$_SESSION[username]' ORDER BY artikel.tanggal_posting DESC");
						$no = 1;
						while($data_artikel = mysql_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td width="350"><?php echo $data_artikel['judul_artikel'] ?></td>
						<td><a href="?page=rincian_artikel&id_artikel=<?php echo $data_artikel['id_artikel']; ?>">Rincian</a></td>
						<td><?php echo $data_artikel['tanggal_posting']; ?></td>
						<td><?php echo $data_artikel['nama_user']; ?></td>
						<td>
							<a href="?page=edit_artikel&id_artikel=<?php echo $data_artikel['id_artikel']; ?>" class="btn btn-primary">Edit</a>&nbsp;
							<a href="controls/hapus_artikel.php?id_artikel=<?php echo $data_artikel['id_artikel']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data artikel ini ?')">Delete</a>
						</td>
					</tr>
					<?php
						$no++;
						}
					?>
				</tbody>
			</table>
		</body>
</html>