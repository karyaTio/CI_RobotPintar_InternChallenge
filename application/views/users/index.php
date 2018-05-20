<div class="container">
    <div>
        <h3>Customer Data</h3>
        <p>Filter On Progress</p>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Last date buy</th>
                    <th>Total Transaction</th>
                    <th>Total Spending</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user['nama']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['lastBuy']; ?></td>
                    <td><?php echo $user['totalTR']; ?></td>
                    <td><?php echo $user['spend']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/robot_manage.js'?>"></script>