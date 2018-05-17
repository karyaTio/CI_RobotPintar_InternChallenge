<?php echo validation_errors(); ?>

<?php echo form_open('robots/update'); ?>
    <input type="hidden" name="id" id="id" value="<?php echo $robot['id'];?>">

    <label for="Nama">Nama Robot</label>
    <input type="text" name="nama" id="nama" value="<?php echo $robot['nama'];?>">

    <br>
    <label for="brand">Brand</label>
    <select name="merek" id="">
        <?php foreach($brands as $brand): ?>
            <option value="<?php echo $brand['id']; ?>"><?php echo $brand['nama'];?></option>
        <?php endforeach ?>
    </select>

    <br>

    <label for="usability">Usability</label>
    <select name="jenis" id="">
        <?php foreach($usability as $use): ?>
            <option value="<?php echo $use['id']?>"><?php echo $use['nama']?></option>
        <?php endforeach ?>
    </select>

    <br>

    <label for="Deskripsi">Deskripsi</label>
    <input type="text" name="deskripsi" id="deskripsi" value="<?php echo $robot['deskripsi'];?>">

    <br>
    
    <label for="Gambar">Gambar</label>
    <input type="text" name="gambar" id="gambar" value="<?php echo $robot['gambar'];?>">

    <br>
    
    <label for="Stok">Stok</label>
    <input type="text" name="stok" id="stok" value="<?php echo $robot['stok'];?>">

    <br>

    <input type="submit" value="Submit">
</form>