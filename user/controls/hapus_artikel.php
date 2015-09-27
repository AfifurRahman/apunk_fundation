<?php
	include '../../koneksi.php';
	$id_artikel = $_GET['id_artikel'];
	$delete = mysql_query("DELETE FROM artikel WHERE id_artikel = '$id_artikel' ");
	if ($delete) {
		header("location:../?page=lihat_artikel&notif=3");
	}
?>