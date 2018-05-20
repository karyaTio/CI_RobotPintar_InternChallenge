<div class="container">
    <div>
        <h3>Brand Management Page</h3>
        <a class="waves-effect waves-light btn modal-trigger" href="#modal_add">Create</a>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($brands as $brand): ?>
                <tr>
                    <td><?php echo $brand['id']; ?></td>
                    <td><?php echo $brand['nama']; ?></td>
                    <td colspan"2">
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal_edit">Edit</a>
                        <a href="<?php echo base_url(). 'brand/delete/' . $brand['id']; ?>" class="waves-effect waves-light btn">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>

<!-- Modal Structure -->
<div id="modal_add" class="modal">
    <?php echo form_open('brand/create'); ?>
        <div class="modal-content">
            <?php echo validation_errors(); ?>
            <div class="row">
                <div class="input-field col s12">
                    <input name="nama" id="name" type="text" class="validate">
                    <label for="name">Name</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="waves-effect waves-light btn">Create</button>
        </div>
    <?php echo form_close();?>
</div>

<!-- Modal Structure -->
<div id="modal_edit" class="modal">
    <?php echo form_open('brand/update'); ?>
        <div class="modal-content">
            <?php echo validation_errors(); ?>
            <div class="row">
                <input type="hidden">
                <div class="input-field col s12">
                    <input name="nama" id="name" type="text" class="validate" value="">
                    <label for="name">Name</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="waves-effect waves-light btn">Create</button>
        </div>
    <?php echo form_close();?>
</div>