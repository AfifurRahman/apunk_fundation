<?php
	include '../koneksi.php';
	session_start();
	$user = mysql_fetch_row(mysql_query("SELECT * FROM user WHERE id_user = '$_SESSION[username]'"));
?>
<html>
	<head>
		<title>Admin | Apunk Foundation</title>
	</head>
		<body>
			<button class="btn btn-success">Edit Profil</button> <hr />
			<form class="form-horizontal" method="POST" action="controls/proses_edit_profil.php" enctype="multipart/form-data">
				<div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Kode User</label>
				    <div class="col-xs-8">
				    	<input type="text" class="form-control" name="kode_user" id="kode" value="<?php echo $user[0]; ?>" readonly />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Nama User</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="nama_user" id="nama" value="<?php echo $user[1]; ?>" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Alamat User</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="alamat_user" id="alamat" value="<?php echo $user[2]; ?>" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Nomor Hp</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="nomor_hp" id="no_hp" value="<?php echo $user[3]; ?>" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Tempat Lahir</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $user[4]; ?>" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Tanggal lahir</label>
				    <div class="col-xs-8">
				    	<input required type="date" class="form-control" name="tanggal_lahir" id="tgl_lahir" value="<?php echo $user[5]; ?>" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Moto Hidup</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="moto_hidup" id="modup" value="<?php echo $user[6]; ?>" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Jabatan</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="jabatan" id="jabatan" readonly value="<?php echo $user[7]; ?>" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Foto</label>
				    <div class="col-xs-8">
				    	<input required type="file" name="foto_profil" id="foto" /><br />
				    	<img src="foto_user/<?php echo $user[8]; ?>" width="50" height="50" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Username</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="username" id="username" value="<?php echo $user[9]; ?>" />
				    </div>
				 </div>
				  <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">&nbsp;</label>
				    <div class="col-xs-8">
				    	<input type="submit" class="btn btn-primary" value="Edit Profil" name="go_edit" />
				    </div>
				 </div>
			</form>
		</body>
</html>