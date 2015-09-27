<html>
	<head>
		<title></title>
	</head>
		<body>
			<button class="btn btn-success">Ganti Password</button> <hr />
			<form class="form-horizontal" method="POST" action="controls/proses_ganti_password.php">
				<div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Password Lama</label>
				    <div class="col-xs-8">
				    	<input required type="password" class="form-control" name="password_lama" id="pass_lama" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Password Baru</label>
				    <div class="col-xs-8">
				    	<input required type="password" class="form-control" name="password_baru" id="pass_baru" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Konfirmasi</label>
				    <div class="col-xs-8">
				    	<input required type="password" class="form-control" name="konfirmasi" id="konfirmasi" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">&nbsp;</label>
				    <div class="col-xs-8">
				    	<input type="submit" class="btn btn-primary" value="Ubah" name="go_ganti" />
				    </div>
				 </div>
			</form>
		</body>
</html>