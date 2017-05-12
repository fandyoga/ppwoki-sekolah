<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>
	<link href="<?php echo base_url() ?>assets/css/adminstyle.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico" type="image/x-icon">
	<script src="<?php echo base_url() ?>assets/js/clock.js" type="text/javascript"></script>
<!-- TINYMCE SETTING -->
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<!-- END TINYMCE -->
<script language="JavaScript">
	var txt="Welcome to Administrasi SMA Prestasi Yogyakarta";
	var kecepatan=500;
	var segarkan=null;
	function bergerak() { 
		document.title=txt;
		txt=txt.substring(1,txt.length)+txt.charAt(0);
		segarkan=setTimeout("bergerak()",kecepatan);
	}
		bergerak();
</script>

</head>

<body OnLoad="startclock()">
<div id="main">


