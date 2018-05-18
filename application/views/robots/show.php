<div class="container">
    <div class="row">
        <div class="col s12">
            <h3><?php echo $robot['nama']; ?></h3>
        </div>

        <div class="col s5">
            <p><?php echo $robot['gambar']; ?></p>
        </div>

        <div class="col s7">
            <p>Stock tersedia <?php echo $robot['stok']; ?></p>
            <p><?php echo $robot['merek']; ?></p>
            <p><?php echo $robot['kegunaan']; ?></p>
            <hr>
            <?php echo $robot['deskripsi']; ?>
            <hr>
            
        </div>

        <div class="col s5">
            List of images
        </div>

        <div class="col s7">
            <a href="#" class="button is-info">Tambah ke Trolli</a>
        </div>
    </div>
</div>