<?php
	include '../../koneksi.php';
	session_start();
	$password_lama = mysql_real_escape_string($_POST['password_lama']);
	$password_baru = mysql_real_escape_string($_POST['password_baru']);
	$konfirmasi = mysql_real_escape_string($_POST['konfirmasi']);

	if($_POST['go_ganti']=="Ubah")
	{
		$query = mysql_query("SELECT password FROM user WHERE password = '$password_lama' ");
		$kode = $_SESSION['username'];
		$lama = mysql_num_rows($query);
		if($lama == 0)
		{
	?>
		<script language="javascript">
			alert("Password lama salah !!!");
			document.location.href='../?page=ganti_password';
		</script>
	<?php
		}elseif($password_baru != $konfirmasi){
	?>
		<script language="javascript">
			alert("Password baru tidak cocok !!!");
			document.location.href='../?page=ganti_password';
		</script>
	<?php
		}else{
			$update = mysql_query("UPDATE user SET password = '$konfirmasi' WHERE id_user = '$kode' ");
	?>
		<script language="javascript">
			alert("Password berhasil diubah !!!");
			document.location.href='../?page=beranda';
		</script>
	<?php
		}
	}
?>