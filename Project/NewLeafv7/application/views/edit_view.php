<!DOCTYPE html>
<?php $this->helper('form'); ?>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="<?php echo base_url('css/themes/newLeaf.css')?>" />
	<link rel="stylesheet" href="<?php echo base_url('css/main.css')?>" />
	<link href='http://fonts.googleapis.com/css?family=Didact+Gothic|Merienda' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
	<!-- first page is the view that you will see when you log in -->
	<div data-role="page" data-theme="a" id="edit" class="wrapper">
		<div data-role="header">
	      <h1 id="header">Edit My Account</h1>
	      <!-- nav bar -->
	      <a class="home" href="<?php echo base_url('index.php/user'); ?>" rel="external" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
	      <a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
	    </div><!-- /header -->

		<div data-role="content">
				<div id="editUser">
		          <?php echo validation_errors('<p class="error">'); ?>
		          <!-- the form to edit your account info -->
		          <?php echo form_open('/edit/edit_user'); ?>
		            <label for="username">Enter New Username</label>
		            <input type="text" id="amount" name="username" value="<?php echo $this->session->userdata('user_name'); ?>" />
		            <label for="email">Enter New Email</label>
		            <input type="text" id="email" name="email" value="<?php echo $this->session->userdata('user_email'); ?>"/>
		            <label for="password">New Password</label>
		            <input type="password" id="password" name="password"/>
		            <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id'); ?>"/>
		            <input type="submit" value="Edit Account Info" />
		          <?php echo form_close(); ?>
		      	</div>
		      	<div id="deleteUser">
		      		<!-- the form to delete your account -->
		      		<h3>This is to delete your account.  If you delete your account, you must create a new one to keep using the site</h3>
		      		<?php echo form_open('/edit/delete_user'); ?>
		      		<input type="hidden" name="user" value="<?php echo $this->session->userdata('user_id'); ?>">
		            <input type="submit" value="Delete My Account" />
		          <?php echo form_close(); ?>
		      	</div>
		</div><!-- /content -->

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->