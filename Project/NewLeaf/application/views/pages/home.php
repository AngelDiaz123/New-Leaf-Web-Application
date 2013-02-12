<?php
	$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?> - Welcome</title>
	<link rel="stylesheet" href="../css/themes/newLeaf.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile.structure-1.3.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js"></script>
</head>
<body>
<div data-role="page">

	<div data-role="header">
		<h1>Home</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Hello world</p>
		<a href="https://accounts.google.com/o/oauth2/auth?scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&redirect_uri=http://newleaf.angelldiaz.com/login/&response_type=token&client_id=1034332863313.apps.googleusercontent.com">Login</a>		
	</div><!-- /content -->

</div><!-- /page -->
		
	</div>

</div>

<strong>&copy; New Leaf 2013</strong>	
</body>
</html>