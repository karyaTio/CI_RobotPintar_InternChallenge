<div class="container">
<?php echo validation_errors(); ?>

<?php echo form_open('admin/login'); ?>
    <div class="row card">
        <div class="col s12 block">
            <h3 class="center-align">Login</h3>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input name="email" id="email" type="email" class="validate" autofocus>
                <label for="email">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
            <input name="password" id="password" type="password" class="validate">
            <label for="password">Password</label>
            </div>
        </div>

        <div class="row">
            <div class="col s8 offset-s6">
                <button class="btn waves-effect waves-light" type="submit" name="action">Login
                    <!-- <i class="material-icons right">send</i> -->
                </button>
            </div>
        </div>
    </div>
<?php echo form_close(); ?>
</div>