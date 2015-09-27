<?php
	include '../../koneksi.php';
	$id_foto = $_GET['id_foto'];
	$delete = mysql_query("DELETE FROM foto_gallery WHERE id_foto = '$id_foto' ");
	if ($delete) {
		header("location:../?page=tambah_foto");
	}
?>