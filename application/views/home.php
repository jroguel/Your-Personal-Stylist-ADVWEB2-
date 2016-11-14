<div  class="container">
  
 <!--<div class="text-center">
    <h1>Your Personal Stylist</h1>
    <p class="lead">This web app will recommend you your daily outfit.</p>
  </div>
-->
  <div class="row carousel-holder">

                    <div class="col-md-7">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                 <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive" src="assets/images/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="assets/images/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="assets/images/shoe1.jpg" alt="">
                                </div>
                                 <div class="item">
                                    <img class="img-responsive" src="assets/images/shoe2.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                <?php
                echo "<h2>Recommended Styles for Today, " .date("l")." ".date("m/d/Y"). "</h2>"; 
                ?>
                 <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">Php2499.99</h4>
                                <h4><a href="#">Sporty</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
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
</div>
  
</div><!-- /.container -->
	