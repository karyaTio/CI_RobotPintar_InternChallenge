<div class="container">
    <div>
        <h3>Transaction Data</h3>
        <p>Filter On Progress</p>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($transactions as $transaction): ?>
                <tr>
                    <td><?php echo $transaction['nama']; ?></td>
                    <td><?php echo $transaction['pembeli']; ?></td>
                    <td><?php echo $transaction['tgl']; ?></td>
                    <td><?php echo $transaction['harga']; ?></td>
                    <td><?php echo $transaction['qty']; ?></td>
                    <td><?php echo $transaction['total']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/robot_manage.js'?>"></script>