<?php
	session_start();
	if(isset($_SESSION['username'])){
		include '../koneksi.php';
		$user = mysql_fetch_array(mysql_query("SELECT nama_user FROm user WHERE id_user = '$_SESSION[username]' "));
?>
<html>
	<head>
		<title>Admin | Apunk Foundation</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="Afifur Rahman">

    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap.js"></script>
    	<script src="js/npm.js"></script>
	</head>
		<body>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">APUNK FUNDATION</a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="../" target="_blank">Lihat Website</a></li>
			        <li><a href="logout.php" onclick="return confirm('Apakah anda ingin keluar dari sistem ini ?')">Logout</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-2">
						<div class="list-group">
							  <a href="?page=beranda" class="list-group-item active">
							    Beranda
							  </a>
							  <a href="?page=tambah_artikel" class="list-group-item">Tambah Artikel</a>
							  <a href="?page=lihat_artikel" class="list-group-item">Lihat Artikel</a>
							  <a href="?page=tambah_foto" class="list-group-item">Tambah Foto gallery</a>
							  <a href="?page=edit_profil" class="list-group-item">Edit Profil</a>
							  <a href="?page=ganti_password" class="list-group-item">Ganti Password</a>
						</div>
					</div>
					<div class="col-xs-10">
						<div class="breadcrumb">
							  <h4 style="color:#CC0000;">Selamat datang <?php echo $user['nama_user']; ?></h4>
						</div>
					</div>
					<div class="col-xs-10">
						<?php
							error_reporting(0);
							$page = $_GET['page'];
							if ($page=="") {
								include 'beranda.php';
							}else{
								switch ($page) {
									case 'beranda':
										include 'beranda.php';
										break;
									case 'tambah_artikel':
										include 'tambah_artikel.php';
										break;
									case 'tambah_foto':
										include 'tambah_foto.php';
										break;
									case 'edit_profil':
										include 'edit_profil.php';
										break;
									case 'ganti_password':
										include 'ganti_password.php';
										break;
									case 'lihat_artikel':
										include 'lihat_artikel.php';
										break;
									case 'rincian_artikel':
										include 'rincian_artikel.php';
										break;
									case 'edit_artikel':
										include 'edit_artikel.php';
										break;
									case 'edit_foto':
										include 'edit_foto.php';
										break;
								}
							}
						?>
					</div>
				</div>
			</div>
		</body>
</html>
<?php
	}else{
		header("location:../");
	}
?>