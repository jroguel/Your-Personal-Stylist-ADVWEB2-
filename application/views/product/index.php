<div class="container">
  <h2>List of Items</h2>
<?php foreach ($product as $product_item): ?>

<div class="container">
  <div class="list-group">
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading"><?php echo $product_item['brand']; ?></h4>
      <p class="list-group-item-text">PHP <?php echo + $product_item['price']; ?></p>
    </a>
  </div>
</div>


<?php endforeach; ?>
</div>
