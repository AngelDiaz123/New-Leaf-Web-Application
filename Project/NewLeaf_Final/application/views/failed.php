<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="<?php echo base_url('css/themes/newLeaf.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('css/main.min.css')?>" />
	<link href='http://fonts.googleapis.com/css?family=Didact+Gothic|Merienda' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>
<body>
	<div data-role="page" data-theme="a">
		<div data-role="header">
			<h1>Register</h1>
		</div><!-- /header -->
		<!-- if failed username this is the page that you will see -->
		<div data-role="content">
	 		<?php echo validation_errors('<p class="error">'); ?>
	 		<p>Username already taken.  Please try again</p>
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