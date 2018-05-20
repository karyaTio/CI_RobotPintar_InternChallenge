<!-- Overview 3 -->
<div class="container overview3">
  <div class="row center-align">
    <div class="col s4">
      <div class="card">
        <i class="material-icons large">monetization_on</i>
        <p><?php echo $montly_profit['result']; ?></p>
        <p>Profit this month</p>
      </div>
    </div>
    <div class="col s4">
      <div class="card">
        <i class="material-icons large">account_circle</i>
        <p><?php echo $total_user; ?></p>
        <p>Active Users</p>
      </div>
    </div>
    <div class="col s4">
      <div class="card">
        <i class="material-icons large">shop</i>
        <p><?php echo $top_sale['nama']; ?></p>
        <p>Top Sales</p>
      </div>
    </div>
  </div>
</div>

<hr>

<!-- Out of stock -->
<section class="container">
    
<table class="table">
<h3 class="has-background-danger has-text-white" style="padding:5px;" >Out of Stock Product !!!</h3>
  <thead>
    <tr>
      <th><abbr title="Name">Name</abbr></th>
      <th><abbr title="Brand">Brand</abbr></th>
      <th><abbr title="Usability">Useablity</abbr></th>
      <th><abbr title="Price">Price</abbr></th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($stocks as $stock): ?>
    <tr>
      <td><?php echo $stock['nama']; ?></td>
      <td><?php echo $stock['merek']; ?></td>
      <td><?php echo $stock['kegunaan']; ?></td>
      <td><?php echo $stock['harga']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</section>