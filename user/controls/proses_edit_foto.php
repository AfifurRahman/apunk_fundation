<?php
	include '../../koneksi.php';

	$keterangan = mysql_real_escape_string($_POST['keterangan']);
	$nama_foto = $_FILES['foto_gallery']['name'];
	$tmp_foto = $_FILES['foto_gallery']['tmp_name'];
	$move = move_uploaded_file($tmp_foto, '../foto_gallery/'.$nama_foto);
	$foto_name = $nama_foto;
	$id_foto = $_POST['id_foto'];

	if ($_POST['go_edit']=="Edit") {
		if (empty($nama_foto)) {
			$update = mysql_query("UPDATE foto_gallery SET judul_foto = '$keterangan' WHERE id_foto = '$id_foto' ");
			if ($update) {
				header("location:../?page=tambah_foto");
			}
		}elseif(!empty($nama_foto)){
			$update1 = mysql_query("UPDATE foto_gallery SET judul_foto = '$keterangan', foto = '$foto_name' WHERE id_foto = '$id_foto' ");
			if ($update1) {
				header("location:../?page=tambah_foto");
			}
		}
	}
?>