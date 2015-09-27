<?php
	include 'koneksi.php';
	$batas=5;
	$halaman=$_GET['halaman'];
	$posisi=null;
	if(empty($halaman)){
		$posisi=0;
		$halaman=1;
	}else{
		$posisi=($halaman-1)* $batas;
	}


	//select data artikel
	$query_artikel = mysql_query("SELECT * FROM artikel INNER JOIN user ON artikel.id_user = user.id_user ORDER BY artikel.tanggal_posting DESC LIMIT $posisi, $batas");
?>
<html>
	<head>
		<title>Apunk Foundation</title>
		<link rel="shortcut icon" href="gambar/logo.png" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script type="text/javascript" src="jquery/jquery-1.4.4.min.js"></script> 
		<script type="text/javascript" src="jquery/jquery.nivo.slider.pack.js"></script> 
		<script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
		</script>
	</head>
		<body>
			<div id="slider">
				<img src="gambar/gambar1.jpg" />
				<img src="gambar/gambar2.jpg" />
				<img src="gambar/gambar3.jpg" />
				<img src="gambar/gambar4.jpg" />
				<img src="gambar/gambar5.jpg" />
			</div>
			<div id="body-left">
				<div id ="tanggal">
							<table border = "0" align="center" width="190">
								<tr>
									<td colspan = "2">
										<script type="text/javascript">  
											// 1 detik = 60 
											window.setTimeout("waktu()",60);    
											function waktu() {     
												var tanggal = new Date();    
												setTimeout("waktu()",60);    
												document.getElementById("time").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();  
											}  
									   </script>  
									</td>
								</tr>
								
								<tr>
									<script>
										var months = new Array();
											months[0] = "Januari";
											months[1] = "Peburari";
											months[2] = "Maret";
											months[3] = "April";
											months[4] = "Mei";
											months[5] = "Juni";
											months[6] = "Juli";
											months[7] = "Agustus";
											months[8] = "September";
											months[9] = "Oktober";
											months[10] = "Nopember";
											months[11] = "Desember";
										var currentDate = new Date();
										var currentMonth = currentDate.getMonth();
										var hariini=currentDate.getDate();
											currentDate.setDate(1);
											document.write("<br><br><table border=0 width='350px'  cellpadding=8 cellspacing=5>"); 
											document.write("<tr>");
											document.write("<td colspan=7  align='center'><strong><font color='#990000'>" + months[currentMonth] + "</font></td>");
											document.write("<tr>");
											document.write("<td bgcolor='#CC0000' align='center'><font color=white>M</font></td>");
											document.write("<td bgcolor='#CC0000' align='center'><font color=white>S</font></td>");
											document.write("<td bgcolor='#CC0000' align='center'><font color=white>S</font></td>");
											document.write("<td bgcolor='#CC0000' align='center'><font color=white>R</font></td>");
											document.write("<td bgcolor='#CC0000' align='center'><font color=white>K</font></td>");
											document.write("<td bgcolor='#CC0000' align='center'><font color=white>J</font></td>");
											document.write("<td bgcolor='#CC0000' align='center'><font color=white>S</font></td>");
											document.write("</tr>");
									
											if (currentDate.getDay() != 0){
												document.write("<tr>");
												for (i = 0; i < currentDate.getDay(); i++){
													document.write("<td>&nbsp;</td>");
												}
											}
											
											while (currentDate.getMonth() == currentMonth){
												if (currentDate.getDay == 0){
													document.write("<tr>");
												}

												if (hariini==currentDate.getDate()){
													document.write("<td align='center' bgcolor='#990000'> <font color='white'><strong>" + currentDate.getDate() + "</strong></font></td>");
												}
												else
												{
												document.write("<td align='center'>" + currentDate.getDate() + "</td>");
												}

												if (currentDate.getDay() == 6)
												{
												document.write("</tr>");
												}
												currentDate.setDate(currentDate.getDate() + 1);
											}
											
											for (i = currentDate.getDay(); i <= 6; i++){
												document.write("<td>&nbsp;</td>");
											}
											document.write("</font></table>");
									</script>
								</tr>
							</table>
						</div> <hr />
						<h3>Login</h3>
						<form action="log_user.php" method="POST">
							<table border="0" cellpadding="5">
								<tr>
									<th align="justify">Username</th>
									<td><input required type="text" name="username" id="input" /></td>
								</tr>
								<tr>
									<th align="justify">Password</th>
									<td><input required type="password" name="password" id="input" /></td>
								</tr>
								<tr>
									<th>&nbsp;</th>
									<td><input type="submit" name="go_log" id="submit" value="Login" /></td>
								</tr>
							</table> <hr />
						</form>
				</div>
				<div id="body-right">
					<h3><font color="#CC0000">Apunk</font> Foundation Profil</h3>
					<div id="menu-divisi">
						<ul>
							<li><a href="?page=ketua">Profil Ketua Apunk Foundation</a></li>
							<li><a href="?page=wakil_ketua">Profil Wakil Ketua Apunk Foundation</a></li>
							<li><a href="?page=bendahara">Profil Bendahara Apunk Foundation</a></li>
							<li><a href="?page=sekretaris">Profil Sekretaris Apunk Foundation</a></li>
							<li><a href="?page=divisi_it">Profil divisi IT Apunk Foundation</a></li>
							<li><a href="?page=divisi_akuntansi">Profil divisi Akuntansi Apunk Foundation</a></li>
							<li><a href="?page=divisi_teknik">Profil divisi Teknik Apunk Foundation</a></li>
							<li><a href="?page=divisi_desainer">Profil divisi Desainer Apunk Foundation</a></li>
						</ul>
					</div>
				</div>
				<?php
					while($data_artikel = mysql_fetch_array($query_artikel)){
				?>
				<div class="artikel">
					<h3><?php echo $data_artikel['judul_artikel']; ?></h3>
					<p>
						<?php echo substr($data_artikel['keterangan'], 0,300); ?>... <a href="?page=rincian_artikel&id_artikel=<?php echo $data_artikel['id_artikel']; ?>" style="color:#800000;"><b>Lanjutkan</b></a>
					</p>
					<p>
						<i>diposting oleh  : <?php echo $data_artikel['nama_user']; ?></i> <br />
						<i>tanggal posting : <?php echo $data_artikel['tanggal_posting']; ?></i>
					</p>
				</div><br />
				<?php
					}
				?>
				<div class="paging">
					<?php
						$sql_paging = mysql_query("SELECT id_artikel FROM artikel");
						$jmldata = mysql_num_rows($sql_paging);
						$jumlah_halaman = ceil($jmldata / $batas);

						echo "<font color='#900000;'>Halaman : </font>";
						for($i = 1; $i <= $jumlah_halaman; $i++)
							if($i != $halaman) {
								echo "| <a href=?page=home&halaman=$i>$i</a> |";
							} else {
								echo "| <b>$i</b> |";
							}
					?>
				</div>
				
		</body>
</html>