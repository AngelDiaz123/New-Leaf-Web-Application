<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Leaf - Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/themes/newLeaf.min.css" />
	<link rel="stylesheet" href="../css/main.css"/>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile.structure-1.3.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js"></script>
</head>
<body>
	<!-- Start of first page -->
<div data-role="page" id="home">
	<?php
		//var_dump($results);
	?>

	<div data-role="header">
		<h1>Welcome</h1>
	</div><!-- /header -->

	<div data-role="content">
		<img src="../images/logo.png" class="logo"/>
		<!-- login form -->	
		<form>
			<p></p>
			<!-- added focus and blur automatically because html5 allows it -->
			<input class="email" type="text" onfocus="if (this.value=='Enter email') this.value = ''" 
			onblur="if (this.value=='') this.value = 'Enter email'" value="Enter email"/>
			<p></p>
			<input class="password" type="text" onfocus="if (this.value=='Enter password') this.value = ''"
			onblur="if (this.value=='') this.value = 'Enter password'" value="Enter password"/>
			<p></p>
			<!-- goes to home screen for now -->
			<a data-role="button" href="#login">Login</a>
		</form>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->


<!-- Start of second page -->
<div data-role="page" id="login">

	<div data-role="header">
		<h1>Home</h1>
	</div><!-- /header -->

	<div data-role="content">
		<!-- spacing with p tags becuase the css was working.  still trying to figure it out -->
		<p></p>
		<p></p>
		<p></p>	
		<!-- list of all the pages -->
		<ul data-role="listview">
			<!-- figureing out the links to the details page -->
			<li><a href="#">View stats</a></li>
			<li><a href="#">Favorite recipes</a></li>
			<li><a href="#">Find recipes</a></li>
			<li><a href="#">Edit account</a></li>
		</ul>	
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->
</body>
</html>