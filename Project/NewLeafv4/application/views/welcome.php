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
			<a class="logout" href="#home" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
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

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
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

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="see">
		<div data-role="header">
			<h1 id="header">See graph</h1>
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

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="search">
		<div data-role="header">
			<h1 id="header">Search Recipes</h1>
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

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="edit">
		<div data-role="header">
			<h1 id="header">Edit</h1>
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

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="about">
		<div data-role="header">
			<h1 id="header">About</h1>
			<a class="logout" href="#home" data-icon="delete" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div class="list">
				<ul data-role="listview">
					<!-- info about the site and creator -->
					<div id="info">
						<p id="creator"> Created by Angel Diaz</p>
						<br/>
						<p>About the site</p>
						<p>The site is a simple track your weight mobile web app.  It is built so you can bring it with you no matter where you go.</p>
						<p> What will I see when I first login?</p>
						After registering the main site menu will be displayed after logging in. The menu shows all of options avialable with this app. The top menu allows for you to go back to the home page or allows for you to logout.</p>
						<p>What does each option on the menu do?</p>
						<p>The track your weight menu allows you to input the amount of wieght lost on a day to day basis and after hitting send, it stores it on our servers.  The graph options graphs out the amount you lost everyday this month.  By hitting clear, it allows you to start a new month and track it from there.  The search option allows you to find a recipe so you can find a healthy meal to keep you on track.  You input how many results you want and what kind of food you are looking for.  It displays the recipe, what it looks like, the amount of calories it has and the link to find out how to cook it.  The edit your account option allow for you to edit your username, email or password.</p>
						<br/>
						<p id="contact">Have a question? <a href="mailto:angel.l.diaz123@gmail.com?subject=support">Email support</a></p>
					</div>
				</ul>
			</div>
		</div><!-- /content -->

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->
</body>
</html>