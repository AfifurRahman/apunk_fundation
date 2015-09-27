<?php
	include '../../koneksi.php';
	$kode_user = $_POST['kode_user'];
	$nama_user = mysql_real_escape_string($_POST['nama_user']);
	$alamat_user = mysql_real_escape_string($_POST['alamat_user']);
	$nomor_hp = $_POST['nomor_hp'];
	$tempat_lahir = mysql_real_escape_string($_POST['tempat_lahir']);
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$moto_hidup = mysql_real_escape_string($_POST['moto_hidup']);
	$jabatan = $_POST['jabatan'];

	$nama_foto = $_FILES['foto_profil']['name'];
	$tmp_foto = $_FILES['foto_profil']['tmp_name'];
	$move = move_uploaded_file($tmp_foto, '../foto_user/'.$nama_foto);
	$foto_name = $nama_foto;

	$username = $_POST['username'];

	if ($_POST['go_edit']=="Edit Profil") {
		if (empty($nama_foto)) {
			$update = mysql_query(" UPDATE user SET nama_user		= '$nama_user',
													alamat_user		= '$alamat_user',
													nomor_hp_user	= '$nomor_hp',
													tempat_lahir 	= '$tempat_lahir',
													tanggal_lahir 	= '$tanggal_lahir',
													moto_hidup 		= '$moto_hidup',
													jabatan 		= '$jabatan',
													username 		= '$username'
											WHERE 	id_user 		= '$kode_user'

				");
			if ($update) {
				header("location:../?page=beranda");
			}
		}elseif(!empty($nama_foto)){
			$update1 = mysql_query(" UPDATE user SET nama_user			= '$nama_user',
													 alamat_user		= '$alamat_user',
													 nomor_hp_user		= '$nomor_hp',
													 tempat_lahir 		= '$tempat_lahir',
													 tanggal_lahir 		= '$tanggal_lahir',
													 moto_hidup 		= '$moto_hidup',
													 jabatan 			= '$jabatan',
													 foto 				= '$foto_name',
													 username 			= '$username'
											   WHERE id_user 			= '$kode_user'

				");
			if ($update1) {
				header("location:../?page=beranda");
			}
		}
	}
?>