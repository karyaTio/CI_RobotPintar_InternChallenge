<div class="container">
    <div>
        <h3>Product Management Page</h3>
        <a href="<?php echo base_url(). 'robot/create'?>" class="waves-effect waves-light btn right">Create</a>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Use for</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($robots as $robot): ?>
                <tr>
                    <td><?php echo $robot['nama']; ?></td>
                    <td><?php echo $robot['merek']; ?></td>
                    <td><?php echo $robot['stok']; ?></td>
                    <td><?php echo $robot['harga']; ?></td>
                    <td><?php echo $robot['kegunaan']; ?></td>
                    <td colspan"2">
                        <a href="<?php echo base_url() . 'robot/edit/' . $robot['id']; ?>" class="waves-effect waves-light btn">Edit</a>
                        <a href="<?php echo base_url(). 'robot/delete/' . $robot['id']; ?>" class="waves-effect waves-light btn">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/robot_manage.js'?>"></script>