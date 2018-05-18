<header class="container hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Welcome to admin panel
      </h1>
      <h2 class="subtitle">
        Here you can see overview about the company, add new product, see user list, show transaction data, and manage brand
      </h2>
    </div>
  </div>
</header>

<!-- Overview 3 -->
<div class="container">
    <div class="columns">
        <div class="column">
            <p><?php echo $montly_profit['result']; ?></p>
            <p>Profit this month</p>
        </div>
        <div class="column has-background-info has-text-white">
            <p><?php echo $total_user; ?> Active Users</p>
        </div>
        <div class="column">
            <p><?php echo $top_sale['nama']; ?></p>
            <p>Most Sales</p>
        </div>
    </div>
</div>

<br>
<br>
<br>

<!-- Out of stock -->
<section class="container">
    <h1 class="has-background-danger has-text-white" style="padding:5px;" >Out of Stock !!!</h1>
<table class="table">
  <thead>
    <tr>
      <th><abbr title="ID">ID</abbr></th>
      <th><abbr title="Name">Name</abbr></th>
      <th><abbr title="Brand">Brand</abbr></th>
      <th><abbr title="Usability">Useablity</abbr></th>
      <th><abbr title="Price">Price</abbr></th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th><abbr title="ID">ID</abbr></th>
      <th><abbr title="Name">Name</abbr></th>
      <th><abbr title="Brand">Brand</abbr></th>
      <th><abbr title="Usability">Useablity</abbr></th>
      <th><abbr title="Price">Price</abbr></th>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach($stocks as $stock): ?>
    <tr>
      <td><?php echo $stock['id']; ?></td>
      <td><?php echo $stock['nama']; ?></td>
      <td><?php echo $stock['merek']; ?></td>
      <td><?php echo $stock['kegunaan']; ?></td>
      <td><?php echo $stock['harga']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</section>