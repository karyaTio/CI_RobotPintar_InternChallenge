<h1>Semua Jenis</h1>

<ul>
<?php foreach($usability as $use): ?>
    <li><a href="#"><?php echo $use['nama']; ?></a></li>
<?php endforeach ?>
</ul>

<a href="<?php base_url(); ?>usability/create">Create New </a>