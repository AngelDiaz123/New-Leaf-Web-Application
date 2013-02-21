<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Leaf - Welcome</title>
		<link rel="stylesheet" href="../css/themes/newLeaf.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile.structure-1.3.0-rc.1.min.css" />
</head>
<body>

<div id="container">
	<h1>HAHAHAHAHAHA</h1>
	<?php
		$query = $this->db->query('SELECT name, title, email FROM my_table');

		foreach ($query->result() as $row)
		{
		    echo $row->title;
		    echo $row->name;
		    echo $row->email;
		}

		echo 'Total Results: ' . $query->num_rows();
		?>

	<div id="body">
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js"></script>
	</div>
</div>

</body>
</html>