<div class="grid-container">
    <?php foreach($robots as $robot): ?>
            <div class="card">
                <div class="card-image">
                <img class="robot-image" src="<?php echo site_url() . 'assets/images/robots/' . $robot['gambar']; ?>" alt="Placeholder image">
                </div>
                <div class="card-content">
                    <p><strong><?php echo $robot['nama']; ?></strong><small>(Stock Tersedia <?php echo $robot['stok']; ?>)</small></p>
                    <p>Rp. <?php echo $robot['harga'];?></p>
                    <?php echo $robot['deskripsi']; ?>
                </div>
                <div class="card-action">
                    <a href="<?php echo base_url() . 'robots/show/' . $robot['id'];?>" class="waves-effect waves-light btn">Detail</a>
                    <a href="<?php echo base_url() . 'robots/show/' . $robot['id'];?>" class="waves-effect waves-light btn"><i class="material-icons">add_shopping_cart</i>
                    </a>
                </div>
            </div>
    <?php endforeach ?>
</div>