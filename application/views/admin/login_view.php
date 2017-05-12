<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>
	<link href="<?php echo base_url() ?>assets/css/loginstyle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="<?php echo base_url() ?>assets/css/expose-form.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/queryLoader.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url() ?>assets/js/jquery.tools.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/queryLoader.js" type="text/javascript"></script>   

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

    <script type="text/javascript"> 
      $(document).ready(function(){
      	// expose form ketika form di klik atau kursor mouse berada di salah satu komponen form
	      $("form.expose").bind("click keydown", function() {
          $(this).expose({

			     // setting mask/penutup untuk background dengan CSS
			     maskId: 'mask',

			     // ketika form ter-expose, ganti warna background form 
			     onLoad: function() {
				      this.getExposed().css({backgroundColor: '#fffkl'});
			     },

			     // ketika form tidak ter-expose, kembalikan warna background ke warna semula
			     onClose: function() {
				      this.getExposed().css({backgroundColor: null});
			     },
			     api: true

		      }).load();
	      });
	    });
	  </script>	

</head>

<body OnLoad="document.login.username.focus();">
<div id="header">
  <div id="content">
		<h2>Login</h2>
		<?php
	 	// Cetak session
		if($this->session->flashdata('sukses')) {
				echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
		}
		// Cetak error
			echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
		?>

	<form name="login" class="expose" method="POST" action="<?php echo base_url('admin/login') ?>">
    <img src="<?php echo base_url() ?>assets/images/login-welcome.gif" width="90" height="95" hspace="10" align="left" class="imgadmin">
		<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" placeholder="Username" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" placeholder="Password" /></td>
		</tr>
		<tr>
			<td colspan=2><input type="submit" name="submit" value="Login" class="full"></td>
		</tr>
	</table>
</form> 

  </div>

<div id="footer">
		Copyright &copy; 2016 by Admin SMA Prestasi Yogyakarta
</div>
    
<script>
		QueryLoader.selectorPreload = "body";
		QueryLoader.init();
</script>

</div>
</body>
</html>
