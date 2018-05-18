<div class="container">
<?php echo validation_errors(); ?>

<?php echo form_open('admin/register'); ?>
<div class="row card">
    <div class="col s12 block">
        <h3 class="center-align">Register</h3>
    </div>
    <div class="input-field col s12">
        <input name="name" id="first_name" type="text" class="validate">
        <label for="first_name">First Name</label>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <input name="email" id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <input name="password" id="password" type="password" class="validate">
            <label for="password">Password</label>
        </div>

        <div class="input-field col s6">
            <input name="password2" id="password" type="password" class="validate">
            <label for="password">Confirm Password</label>
        </div>
    </div>
    <div class="row">
        <div class="col s8 offset-s6">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
</div>