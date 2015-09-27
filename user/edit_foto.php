<?php
	include '../koneksi.php';
	$id_foto = $_GET['id_foto'];
	$result = mysql_fetch_row(mysql_query("SELECT * FROM foto_gallery WHERE id_foto = '$id_foto' "));
?>
<html>
	<head>
		<title>Admin | Apunk Foundation</title>
	</head>
		<body>
			<button class="btn btn-success">Edit Foto</button> <hr /> 
			<form class="form-horizontal" method="POST" action="controls/proses_edit_foto.php" enctype="multipart/form-data">
				<input type="hidden" name="id_foto" value="<?php echo $result[0]; ?>" />
				<div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Keterangan</label>
				    <div class="col-xs-8">
				    	<input type="text" class="form-control" name="keterangan" id="ket" value="<?php echo $result[1]; ?>"  />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Tambah Foto</label>
				    <div class="col-xs-8">
				    	<input type="file" name="foto_gallery" /> <br /> 
				    	<img src="foto_gallery/<?php echo $result[2]; ?>" width="50" height="50" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">&nbsp;</label>
				    <div class="col-xs-8">
				    	<input type="submit" class="btn btn-primary" value="Edit" name="go_edit" />
				    </div>
				 </div>
			</form>
		</body>
</html>