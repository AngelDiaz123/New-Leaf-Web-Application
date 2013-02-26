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
	<!-- first page that will show you the front page -->
	<div data-role="page" data-theme="a" id="home">

		<div data-role="header">
			<h1 id="welcome">Welcome to New Leaf</h1>
		</div><!-- /header -->

		<div data-role="content">
			<div id="logo">
				<img src="<?php echo base_url('images/logo.png')?>">
			</div>
			<div class="login">	
				<?php echo form_open("user/login"); ?>
		  			<label for="email">Email:</label>
					<input type="text" id="email" name="email" value="" />
					<label for="password">Password:</label>
					<input type="password" id="pass" name="pass" value="" />
					<input type="submit" class="" value="Sign in" />
				<?php echo form_close(); ?>
				<p>Don't have an account? <a href="#register">Register</a></p>
			</div>

			<div id="moreInfo">
				<p>About the site</p>
						<p>The site is a simple track your weight mobile web app.  It is built so you can bring it with you no matter where you go.  Its a simple way of meeting a goal with out the stress of a subscription.  No fees means no worries</p>
						<br/>
						<p>The track your weight menu allows you to input the amount of wieght lost on a day to day basis and after hitting send, it stores it on our servers.  The graph options graphs out the amount you lost everyday this month.  By hitting clear, it allows you to start a new month and track it from there.  The search option allows you to find a recipe so you can find a healthy meal to keep you on track.  You input how many results you want and what kind of food you are looking for.  It displays the recipe, what it looks like, the amount of calories it has and the link to find out how to cook it.  The edit your account option allow for you to edit your username, email or password.</p>
						<br/>
			</div>
			<div id="graphImg">
				<img src="<?php echo base_url('images/graph.jpg')?>">
			</div>
		</div><!-- /content -->

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->

	</div><!-- /page -->

	<!-- the page that will let you sign up for the site -->
	<div data-theme="a" data-role="page" id="register">

		<div data-role="header">
			<h1>Register</h1>
		</div><!-- /header -->

		<div data-role="content">
	 		<?php echo validation_errors('<p class="error">'); ?>
	 		<?php echo form_open("user/registration"); ?>
				<p>
				<label for="user_name">User Name:</label>
				<input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
				</p>
				<p>
				<label for="email_address">Your Email:</label>
				<input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
				</p>
				<p>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
				</p>
				<p>
				<label for="con_password">Confirm Password:</label>
				<input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
				</p>
				<p>
				<input type="submit" class="greenButton" value="Submit" />
				</p>
			<?php echo form_close(); ?>
		</div><!-- /content -->

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->
</body>
</html>