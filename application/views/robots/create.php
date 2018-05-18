<div class="container">
    <h3 class="center">Create a product</h3>

    <?php echo validation_errors(); ?>

    <?php echo form_open('robot/create'); ?>
        <div class="row">
            <div class="input-field col s12">
                <input name="nama" id="name" type="text" class="validate">
                <label for="name">Name</label>
            </div>

            <div class="input-field col s6">
                <select name="merek">
                    <option value="" disabled selected>Select product brand</option>
                        <?php foreach($brands as $brand): ?>
                            <option value="<?php echo $brand['id']; ?>"><?php echo $brand['nama'];?></option>
                        <?php endforeach ?>
                </select>
                <label>Brand Select</label>
            </div>

            <div class="input-field col s6">
                <select name="jenis">
                    <option value="" disabled selected>Select product usability</option>
                        <?php foreach($usability as $use): ?>
                            <option value="<?php echo $use['id']; ?>"><?php echo $use['nama'];?></option>
                        <?php endforeach ?>
                </select>
                <label>Useablity Select</label>
            </div>

            <div class="input-field col s6">
                <input name="harga" id="price" type="text" class="validate">
                <label for="price">Price</label>
            </div>

            <div class="input-field col s6">
                <input name="stok" id="stok" type="text" class="validate">
                <label for="stok">Stock</label>
            </div>
        </div><!-- row -->

        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input name="gambar" class="file-path validate" type="text">
            </div>
        </div>
        
            
        <div class="row">
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="deskripsi" id="deskripsi" class="materialize-textarea"></textarea>
                    <label for="deskripsi">Spesifikasi</label>
                </div>
            </div>

            <div class="col s12">
                <button type="submit" class="waves-effect waves-light btn">Create</button>
            </div>
        </div>

    <?php echo form_close();?>
</div>