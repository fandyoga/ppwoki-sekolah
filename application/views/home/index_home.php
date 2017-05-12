<p>
        <?php foreach($berita as $list) { ?>
          <h3><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></h3>
          <?php echo $list['ringkasan']; ?>
        <hr/>
<?php } ?>      
</p>

