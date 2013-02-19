<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="<?php echo base_url('css/themes/newLeaf.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('css/main.css')?>" />
	<link href='http://fonts.googleapis.com/css?family=Didact+Gothic|Merienda' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
<body>
	<!-- first page is the view that you will see when you log in -->
	<div data-role="page" data-theme="a" id="home">
		<div data-role="header">
			<h1 id="header">Home</h1>
			<a class="logout" href="#home" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div class="list">
				<!-- the list of the menu items that you will find -->
				<ul data-role="listview">
					<li><a href="#track" data-transition="slidefade">Track weight</a></li>
					<li><a href="#see" data-transition="slidefade">See graph</a></li>
					<li><a href="#search" data-transition="slidefade">Search for recipe</a></li>
					<li><a href="#edit" data-transition="slidefade">Edit account</a></li>
					<li><a href="#about" data-transition="slidefade">About us</a></li>
				</ul>
			</div>
	  		<!--<h2>Welcome Back, <?php// echo $this->session->userdata('user_name'); ?>!</h2>-->
		</div><!-- /content -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="track">
		<div data-role="header">
			<h1 id="header">Track weight</h1>
			<a class="logout" href="#home" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div class="trackCounter">
				<!-- input data to the database to for weight tracking. not fully working yet -->
				<div data-role="fieldcontain">
					<label for="quantity">Amount of weight lost</label>
					<input id="quantity" type="number" min="5" max="30" step="5" />
					<label for="date">Day of the month</label>
					<input id="date" type="number" min="1" max="31" />
				</div>	
			</div>
		</div>
		</div><!-- /content -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="see">
		<div data-role="header">
			<h1 id="header">Home</h1>
			<a class="logout" href="#home" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div class="list">
				<ul data-role="listview">
					<p>Coming soon</p>
				</ul>
			</div>
		</div><!-- /content -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="search">
		<div data-role="header">
			<h1 id="header">Home</h1>
			<a class="logout" href="#home" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div id="find">
				<!-- sends it to the user search controller. not fully working yet -->
				<?php echo form_open("base_url('search')") ?>
			  		<label for="amount">How many results do you want?</label>
					<input type="text" id="amount" name="amount" value="" />
					<label for="item">What food item would you like to search for?</label>
					<input type="text" id="item" name="item" value="" />
					<input type="submit" class="" value="Search for recipe" />
				<?php echo form_close(); ?>
			</div>
		</div><!-- /content -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="edit">
		<div data-role="header">
			<h1 id="header">Home</h1>
			<a class="logout" href="#home" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div class="list">
				<ul data-role="listview">
					<!-- will allow for the user to edit there content -->
				</ul>
			</div>
		</div><!-- /content -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="about">
		<div data-role="header">
			<h1 id="header">Home</h1>
			<a class="logout" href="#home" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div class="list">
				<ul data-role="listview">
					<!-- info about the company -->
				</ul>
			</div>
		</div><!-- /content -->
	</div><!-- /page -->
</body>
</html>