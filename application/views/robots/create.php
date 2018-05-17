<?php echo validation_errors(); ?>

<div class="container">
    <?php echo form_open('robot/create'); ?>
        <div class="field">
            <label class="label">Nama </label>
            <div class="control">
                <input class="input" type="text" placeholder="Text input" name="nama">
            </div>
        </div>

        <div class="field">
            <label class="label">Merek</label>
            <div class="control">
                <div class="select">
                <select name="merek">
                    <?php foreach($brands as $brand): ?>
                        <option value="<?php echo $brand['id']; ?>"><?php echo $brand['nama'];?></option>
                    <?php endforeach ?>
                </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Kategori</label>
            <div class="control">
                <div class="select">
                <select name="jenis">
                    <?php foreach($usability as $use): ?>
                        <option value="<?php echo $use['id']?>"><?php echo $use['nama']?></option>
                    <?php endforeach ?>
                </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Stok </label>
            <div class="control">
                <input class="input" type="text" placeholder="Text input" name="stok">
            </div>
        </div>

        <div class="field">
            <label class="label">Gambar </label>
            <div class="control">
                <input class="input" type="text" placeholder="Text input" name="gambar">
            </div>
        </div>

        <div class="field">
            <label class="label">Spesifikasi </label>
            <div class="control">
                <input class="input" type="text" placeholder="Text input" name="deskripsi">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Buat</button>
            </div>
        </div>
    </form>
</div>