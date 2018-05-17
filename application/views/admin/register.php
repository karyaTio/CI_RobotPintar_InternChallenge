<div class="container">

<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">

    <?php echo validation_errors(); ?>

    <?php echo form_open('admin/register'); ?>
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input name="name" class="input" type="text" placeholder="Name ">
            </div>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input name="email" class="input" type="text" placeholder="Email ....">
            </div>
        </div>

        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input name="password" class="input" type="password" placeholder="Password...">
            </div>
        </div>

        <div class="field">
            <label class="label">Confirm Password</label>
            <div class="control">
                <input name="password2" class="input" type="password" placeholder="Confirm Password...">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link">Submit</button>
            </div>
        </div>

    <?php echo form_close(); ?>
</div>
</div>
</div>