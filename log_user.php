<?php
	if ($_POST['go_log']=="Login") {
		session_start();
		include 'koneksi.php';
		$username	= mysql_real_escape_string($_POST['username']);
		$password 	= mysql_real_escape_string($_POST['password']);
		$sql 		= "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
		$query		= mysql_query($sql);
		$validasi 	= mysql_num_rows($query);
		if ($validasi==1) {
			$data_log = mysql_fetch_array($query);
			$_SESSION['username']=$data_log['id_user'];
			header("location:user/");
		}else{
			echo "
				<script type='text/javascript'>
					alert('Gagal Login');
					document.location.href='index.php';
				</script>
			";
		}
	}
?>