<div class="container">
    <h3 class="center">Edit a product</h3>

    <?php echo validation_errors(); ?>

    <?php echo form_open('robot/update'); ?>
        <input type="hidden" name="id" id="id" value="<?php echo $robot['id'];?>">

        <div class="row">
            <div class="input-field col s12">
                <input name="nama" id="name" type="text" class="validate" value="<?php echo $robot['nama'];?>">
                <label for="name">Name</label>
            </div>

            <div class="input-field col s6">
                <select name="merek">
                    <option value="" disabled selected>Select product brand</option>
                        <?php foreach($brands as $brand): ?>
                            <option value="<?php echo $brand['id']; ?>"
                                <?php if($robot['id_merek'] == $brand['id']): ?>
                                    selected="selected"
                                <?php endif; ?>
                            >
                            <?php echo $brand['nama'];?>
                            </option>
                        <?php endforeach ?>
                </select>
                <label>Brand Select</label>
            </div>

            <div class="input-field col s6">
                <select name="jenis">
                    <option value="" disabled selected>Select product usability</option>
                        <?php foreach($usability as $use): ?>
                            <option value="<?php echo $use['id']; ?>"
                                <?php if($robot['id_jenis'] == $use['id']): ?>
                                    selected="selected"
                                <?php endif; ?>
                            ><?php echo $use['nama'];?></option>
                        <?php endforeach ?>
                </select>
                <label>Useablity Select</label>
            </div>

            <div class="input-field col s6">
                <input name="harga" id="price" type="text" class="validate" value="<?php echo $robot['harga'];?>">
                <label for="price">Price</label>
            </div>

            <div class="input-field col s6">
                <input name="stok" id="stok" type="text" class="validate" value="<?php echo $robot['stok'];?>">
                <label for="stok">Stock</label>
            </div>
        </div><!-- row -->

        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input name="gambar" class="file-path validate" type="text" value="<?php echo $robot['gambar'];?>">
            </div>
        </div>
        
            
        <div class="row">
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="deskripsi" id="deskripsi" class="materialize-textarea"><?php echo $robot['deskripsi'];?></textarea>
                    <label for="deskripsi">Spesifikasi</label>
                </div>
            </div>

            <div class="col s12">
                <button type="submit" class="waves-effect waves-light btn">Edit</button>
            </div>
        </div>

    <?php echo form_close();?>
</div>