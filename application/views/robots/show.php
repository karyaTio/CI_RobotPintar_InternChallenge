
<div class="container">
    <div class="columns">
        <div class="column is-one-quarter">
            <p><?php echo $robot['gambar']; ?></p>
        </div>
        <div class="column">
            <h1><?php echo $robot['nama']; ?></h1>
            <p>Stock tersedia <?php echo $robot['stok']; ?></p>
            <p><?php echo $robot['merek']; ?></p>
            <p><?php echo $robot['kegunaan']; ?></p>
            <hr>
            <?php echo $robot['deskripsi']; ?>
            <hr>
            <a href="#" class="button is-info">Tambah ke Trolli</a>
        </div>
    </div>
</div>



<a href="<?php echo base_url();?>robot">Kembali</a>