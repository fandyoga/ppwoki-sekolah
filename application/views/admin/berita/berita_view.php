<table id=tables width=100%>
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Status</th>
			<th>Penulis</th>
			<th>Tgl.Posting</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $no = 1; foreach($berita as $list) {?>
		<tr>
			<td align='center'><?php echo $no; ?></td>
			<td><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug'] ?>" target="_blank">
	<?php echo $list['judul']; ?></a></td>
			<td><?php echo $list['status_berita']; ?></td>
			<td><?php echo $list['nama_lengkap']; ?></td>
			<td><?php echo $list['tanggal']; ?></td>
			<td align=center>
				<a href='<?php echo base_url() ?>admin/berita/edit/<?php echo $list['id_berita'] ?>'>Edit</a> | 
				<a href='<?php echo base_url() ?>admin/berita/delete/<?php echo $list['id_berita'] ?>'
						onClick="return confirm('Anda yakin menghapus judul <?php echo $list['judul']?> ?')">Hapus</a>
			</td>
		</tr>
		<?php $no++; } ?>
		<tr>
			<td colspan=5>&nbsp;</td>
			<td align='center'><a href='<?php echo base_url() ?>admin/berita/tambah'>Tambah</a></td>
		</tr>
	</tbody>
</table>