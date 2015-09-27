<?php
	include '../../koneksi.php';
	$keterangan = mysql_real_escape_string($_POST['keterangan']);
	$nama_foto = $_FILES['foto_gallery']['name'];
	$tmp_foto = $_FILES['foto_gallery']['tmp_name'];
	$move = move_uploaded_file($tmp_foto, '../foto_gallery/'.$nama_foto);
	$foto_name = $nama_foto;
	$id_user = $_POST['id_user'];

	if ($_POST['go_tambah']=="Tambah") {
		$insert = mysql_query("INSERT INTO foto_gallery (judul_foto,foto,id_user) VALUES('$keterangan','$foto_name','$id_user')");
		if ($insert) {
			header("location:../?page=tambah_foto");
		}
	}
?>