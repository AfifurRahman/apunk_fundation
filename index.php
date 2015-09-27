<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="Keywords" content="website apunk fundation, bersama peduli untuk indonesia">
		<meta name="Description" content="apunk fundation corps"> 

		<title>Apunk Foundation</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<link rel="shortcut icon" href="gambar/logo.png" />
	</head>
		<body>
			<div id="background">
				<div id="header-top">
					<img src="gambar/logo.png" />
					<h1><font color="red">Apunk</font> Foundation</h1>
					<h4>Bersama Kita Peduli untuk Indonesia</h4>
					<p><?php $tgl = date('d F Y'); echo "$tgl"; ?></p>
				</div>
				<div id="banner-menu"></div>
				<div id="background-menu">
					<div id="menu">
						<ul>
							<a href="?page=home"><li>Home</li></a>
							<a href="?page=tentang_apunk"><li>Tentang Apunk</li></a>
							<a href="?page=visi_misi"><li>Visi & Misi</li></a>
							<a href="?page=gallery"><li>Gallery</li></a>
							<a href="?page=organisasi"><li>Organisasi</li></a>
							<a href="#"><li>Anggota >>
								<ul>
									<a href="?page=ketua"><li>Ketua</li></a>
									<a href="?page=wakil_ketua"><li>Wakil Ketua</li></a>
									<a href="?page=bendahara"><li>Bendahara</li></a>
									<a href="?page=sekretaris"><li>Sekretaris</li></a>
									<a href="?page=divisi_it"><li>Divisi IT</li></a>
									<a href="?page=divisi_akuntansi"><li>Divisi Akuntansi</li></a>
									<a href="?page=divisi_teknik"><li>Divisi Teknik</li></a>
									<a href="?page=divisi_desain"><li>Divisi Desain</li></a>
								</ul>
							</li></a>
						</ul>
					</div>
				</div>
				<div id="body-isi">
					<?php
						error_reporting(0);
						$page = $_GET['page'];
						if($page == ""){
							include('home.php');
						}else{
							switch ($page) {
								case 'home':
									include('home.php');
									break;
								case 'tentang_apunk':
									include('tentang_apunk.php');
									break;
								case 'visi_misi':
									include('visi_misi.php');
									break;
								case 'gallery':
									include('gallery.php');
									break;
								case 'organisasi':
									include('organisasi.php');
									break;
								case 'ketua':
									include('ketua.php');
									break;
								case 'wakil_ketua':
									include('wakil_ketua.php');
									break;
								case 'bendahara':
									include('bendahara.php');
									break;
								case 'sekretaris':
									include('sekretaris.php');
									break;
								case 'divisi_it':
									include('divisi_it.php');
									break;
								case 'divisi_akuntansi':
									include('divisi_akuntansi.php');
									break;
								case 'divisi_teknik':
									include('divisi_teknik.php');
									break;
								case 'divisi_desain':
									include('divisi_desain.php');
									break;
								case 'rincian_artikel':
									include 'rincian_artikel.php';
									break;
							}
						}
					?>
				</div>
				<div id="footer">
					<p>
						copyright@apunk_foundation all reserved <br />
						design-web by afifur rahman (c) 2014
					</p>
				</div>
			</div>
		</body>
</html>