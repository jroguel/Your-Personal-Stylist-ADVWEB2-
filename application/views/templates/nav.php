
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" rel="home" href="#">YPS</a>
	</div>
	
	<div class="collapse navbar-collapse">
		
		<ul class="nav navbar-nav">
			<li><a href="<?php echo site_url('..') ?>">Home</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Closet <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('product') ?>">View Items</a></li>
                <li><a href="<?php echo base_url('index.php/products') ?>">View Outfits</a></li>
                <li><a href="#">Share</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">View Profile</a></li>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Share</a></li>
              </ul>
            </li>
		</ul>
		<!--<button type="button" class="btn btn-default navbar-btn">Button</button>-->
		<div class="col-sm-3 col-md-3 pull-right">
		<!-- <div class ="navbar-notif">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" style ="background-color: crimson; font-size: 20px;color:white; float: left; margin-top:6px; padding:5px"><strong>!</strong><b class="caret"></b></a>
			<ul class = "dropdown-menu">
				<li><a href="#">Notif 1</a></li>
				<li><a href="#">Notif 2</a></li>
				<li><a href="#">Notif 3</a></li>
			</ul>
		</div> -->
        <div class="navbar-text"></div>
		<form class="navbar-form" role="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search Style" name="srch-term" id="srch-term">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
		</form>
		</div>
		
	</div>
</div>