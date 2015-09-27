<?php
	include '../../koneksi.php';
	$id_artikel	= $_POST['id_artikel'];
	$judul		= mysql_real_escape_string($_POST['judul']);
	$keterangan = mysql_real_escape_string($_POST['keterangan']);
	$tgl_posting = $_POST['tgl_posting'];

	$nama_foto = $_FILES['foto_artikel']['name'];
	$tmp_foto = $_FILES['foto_artikel']['tmp_name'];
	$move = move_uploaded_file($tmp_foto, '../foto_artikel/'.$nama_foto);
	$foto_name = $nama_foto;

	if ($_POST['go_edit']=="Edit") {
		if (empty($nama_foto)) {
			$update = mysql_query("UPDATE artikel SET 	judul_artikel 	= '$judul',
														keterangan 		= '$keterangan',
														tanggal_posting	= '$tgl_posting'
												  WHERE id_artikel 		= '$id_artikel' "
				);
			if ($update) {
				header("location:../?page=lihat_artikel&notif=2");
			}
		}elseif(!empty($nama_foto)){
			$update1 = mysql_query("UPDATE artikel SET 	judul_artikel 	= '$judul',
														keterangan 		= '$keterangan',
														tanggal_posting	= '$tgl_posting',
														foto_artikel 	= '$foto_name'
												  WHERE id_artikel 		= '$id_artikel' "
				);
			if ($update1) {
				header("location:../?page=lihat_artikel&notif=2");
			}
		}
	}
?>