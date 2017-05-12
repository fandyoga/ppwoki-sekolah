<!-- Start Header -->
	<div id="header">
   
    </div>
		<div id="wrapper">
			<!-- Start Nav -->
			<div id="menukiri">
			    <div id="menu">
						<a href="<?php echo base_url('admin/dasbor') ?>">Home</a>
						<a href="<?php echo base_url('admin/berita') ?>">Berita</a>
						<a href="<?php echo base_url('admin/kategori') ?>">Kategori Berita</a>
          	<a href="<?php echo base_url('pengumuman') ?>">Pengumuman</a>
						<a href="<?php echo base_url('polling') ?>">Polling</a>
						<a href="<?php echo base_url('guru') ?>">Guru</a>
						<a href="<?php echo base_url('siswa') ?>">Siswa</a>
						<a href="<?php echo base_url('album') ?>">Album</a>
						<a href="<?php echo base_url('gallery') ?>">Gallery</a>
						<a href="<?php echo base_url('bukutamu') ?>">Buku Tamu</a>
          	<a href="<?php echo base_url('admin/user') ?>">User</a>
          	<a href="<?php echo base_url('admin/login/logout') ?>" title="Logout" onClick="return confirm('Apakah anda yakin akan keluar ?')">Logout</a>
          </div>
		  </div>

		  <!-- Start Article -->
			<div id="menukanan">
          <div style="padding-left:342px; padding-top:15px;color:#000000;"><span id="date"></span>,<span id="clock"></span></div>
					<h2><?php echo $title ?></h2>		