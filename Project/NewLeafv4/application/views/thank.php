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
	<!-- Thank you page that lets you sign in after signing up -->
	<div data-role="page" data-theme="a">
		<div data-role="header">
			<h1>Register</h1>
		</div><!-- /header -->

		<div data-role="content">
			<div class="login">
				<?php echo form_open("user/login"); ?>
					<label for="email">Email:</label>
			  		<input type="text" id="email" name="email" value="" />
			  		<label for="pass">Password:</label>
			  		<input type="password" id="pass" name="pass" value="" />
			  		<input type="submit" class="" value="Sign in" />
				<?php echo form_close(); ?>
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