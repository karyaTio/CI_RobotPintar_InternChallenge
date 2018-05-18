<!-- Overview 3 -->
<div class="container">
  <div class="row center-align">
    <div class="col s4">
      <div class="card">
        <p><?php echo $montly_profit['result']; ?></p>
        <p>Profit this month</p>
      </div>
    </div>
    <div class="col s4">
      <div class="card">
        <p><?php echo $total_user; ?></p>
        <p>Active Users</p>
      </div>
    </div>
    <div class="col s4">
      <div class="card">
        <p><?php echo $top_sale['nama']; ?></p>
        <p>Most Sales</p>
      </div>
    </div>
  </div>
</div>

<!-- Out of stock -->
<section class="container">
    <h1 class="has-background-danger has-text-white" style="padding:5px;" >Out of Stock !!!</h1>
<table class="table">
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