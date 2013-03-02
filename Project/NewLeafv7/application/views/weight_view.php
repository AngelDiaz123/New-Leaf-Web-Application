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
</head>
<body>
	<div data-role="page" data-theme="a" id="track" class="wrapper">
		<div data-role="header">
	      <h1 id="header">Graph My Weightloss</h1>
	      <!-- the nav bar -->
	      <a class="home" href="<?php echo base_url('index.php/user'); ?>" rel="external" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
	      <a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
	    </div><!-- /header -->

		<div data-role="content">
			<div class="trackCounter">
				<!-- input data to the database to for weight tracking -->
					<?php echo validation_errors('<p class="error">'); ?>
	 				<?php echo form_open("weight/track"); ?>
						<label for="lost">Amount of Weight Lost</label>
						<input id="lost" name="lost" type="number" value="1"/>
						<label for="date">Today's Date</label>
						<input id="date" name="date" type="date"/>
						<input type="hidden" name="user" value="<?php echo $this->session->userdata('user_id'); ?>"/>
						<input type="submit" name="submit" value="Store My Weight Loss"/>
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