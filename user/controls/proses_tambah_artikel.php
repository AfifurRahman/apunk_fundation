<?php
	include '../../koneksi.php';
	$id_user	= $_POST['id_user'];
	$judul		= mysql_real_escape_string($_POST['judul']);
	$keterangan = mysql_real_escape_string($_POST['keterangan']);
	$tgl_posting = $_POST['tgl_posting'];

	$nama_foto = $_FILES['foto_artikel']['name'];
	$tmp_foto = $_FILES['foto_artikel']['tmp_name'];
	$move = move_uploaded_file($tmp_foto, '../foto_artikel/'.$nama_foto);
	$foto_name = $nama_foto;

	if ($_POST['go_tambah']=="tambah") {
		$insert = mysql_query("INSERT INTO artikel (judul_artikel,keterangan,foto_artikel,tanggal_posting,id_user)
									  VALUES('$judul','$keterangan','$foto_name','$tgl_posting','$id_user') "
			);
		if ($insert) {
			header("location:../?page=lihat_artikel&notif=1");
		}
	}
?>