<div class="container">
  <h2>List of Items</h2>
<?php foreach ($product as $product_item): ?>

<!--<div class="container">
  <div class="list-group">
    <a href="<?php echo site_url('products/'.$product_item['slug']); ?>" class="list-group-item">
      <h4 class="list-group-item-heading"><?php echo $product_item['brand']; ?></h4>
      <p class="list-group-item-text">PHP <?php echo $product_item['price']; ?></p>
    </a>
  </div>
</div> -->

 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url($product_item['img_src']); ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Php<?php echo $product_item['price']; ?></h4>
                                <h4><a href="#"><?php echo $product_item['brand']; ?></a>
                                </h4>
                                <p><?php echo $product_item['description']?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

<?php endforeach; ?>
</div>
