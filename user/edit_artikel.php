<?php
	include '../koneksi.php';
	$id_artikel = $_GET['id_artikel'];
	$result = mysql_fetch_array(mysql_query("SELECT * FROM artikel INNER JOIN user ON artikel.id_user = user.id_user WHERE artikel.id_artikel = '$id_artikel' "));
?>
<html>
	<head>
		<title>Admin | Apunk Foundation</title>
		<script type="text/javascript" src="tinymce/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				tinyMCE.init({
				        // General options
					    mode : "textareas",
					    themes : "advanced",

					     selector: "textarea",
                plugins: [
                        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
                ],
 
                toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
                toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
                toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
 
                menubar: false,
                toolbar_items_size: 'small',
 
                style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
 
                templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                ]
					});
			});
		</script>
	</head>
		<body>
			<button class="btn btn-success">Edit Artikel</button> 
			<a href="?page=lihat_artikel" class="btn btn-danger">Kembali</a><hr />
			<form class="form-horizontal" method="POST" action="controls/proses_edit_artikel.php" enctype="multipart/form-data">
				<input type="hidden" name="id_artikel" value="<?php echo $result['id_artikel']; ?>" />
				<div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Judul</label>
				    <div class="col-xs-8">
				    	<input required type="text" class="form-control" name="judul" id="judul" placeholder="Masukan judul artikel" value="<?php echo $result['judul_artikel']; ?>" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Keterangan</label>
				    <div class="col-xs-8">
				    	<textarea required class="form-control" name="keterangan" rows="35">
				    		<?php echo $result['keterangan']; ?>
				    	</textarea>
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Upload Foto</label>
				    <div class="col-xs-8">
				    	<input required type="file" name="foto_artikel" /> <br />
				    	<img src="foto_artikel/<?php echo $result['foto_artikel']; ?>" width="50" height="50" />
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">Tgl Posting</label>
				    <div class="col-xs-8">
				    	<input type="text" class="form-control" value="<?php echo $result['tanggal_posting']; ?>" readonly name="tgl_posting" placeholder="Masukan judul artikel">
				    </div>
				 </div>
				 <div class="form-group">
				    <label for="input" class="col-xs-2 control-label" style="text-align:justify;">&nbsp;</label>
				    <div class="col-xs-8">
				    	<input type="submit" class="btn btn-primary" value="Edit" name="go_edit" />
				    </div>
				 </div>
			</form>
		</body>
</html>