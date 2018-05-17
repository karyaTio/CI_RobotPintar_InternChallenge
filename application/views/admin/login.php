<div class="container">

<?php echo validation_errors(); ?>

<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
  
  
<?php echo form_open('admin/login'); ?>
<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left">
    <input name="email" class="input" type="email" placeholder="Email... " autofocus>
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">Password</label>
  <div class="control has-icons-left">
    <input name="password" class="input" type="password">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link">Login</button>
  </div>
  <div class="control">
    <a href="<?php echo base_url();?>admin/register" class="button is-text">Register</a>
  </div>
</div>
<? echo form_close(); ?>



  </div>
</div>
</div>