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
			<button class="btn btn-success">Tambah Foto</button> <hr /> 
			<form class="form-horizontal" method="POST" action="controls/proses_tambah_foto.php" enctype="multipart/form-data">
				<input type="hidden" name="id_user" value="<?php echo $data_user['id_user']; ?>" />
				<div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Keterangan</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="keterangan" id="ket"  />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Tambah Foto</label>
				    <div class="col-xs-8">
				    	<input required type="file" name="foto_gallery" /> 
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">&nbsp;</label>
				    <div class="col-xs-8">
				    	<input type="submit" class="btn btn-primary" value="Tambah" name="go_tambah" />
				    </div>
				 </div>
			</form>
			<button class="btn btn-success">Lihat Foto</button> <hr /> 
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Keterangan</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = mysql_query("SELECT * FROM foto_gallery INNER JOIN user ON foto_gallery.id_user = user.id_user WHERE foto_gallery.id_user = '$_SESSION[username]' ");
						$no = 1;
						while($data_foto = mysql_fetch_row($query)){
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data_foto[1]; ?></td>
						<td><a href="" data-toggle="modal" data-id="#detail"><img src="foto_gallery/<?php echo $data_foto[2]; ?>" width="50" height="50" /></a></td>
						<td>
							<a href="?page=edit_foto&id_foto=<?php echo $data_foto[0]; ?>" class="btn btn-primary">Edit</a> &nbsp;
							<a href="controls/hapus_foto.php?id_foto=<?php echo $data_foto[0]; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini ?')">Delete</a>
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