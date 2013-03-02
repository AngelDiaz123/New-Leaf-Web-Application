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
	
	<style type="text/css"> 
		
	</style>
</head>
<body>
	<div data-role="page" data-theme="a" id="see" class="wrapper">
		<div data-role="header">
	      <h1 id="header">Graph My Weight Loss</h1>
	      <a class="home" href="<?php echo base_url('index.php/user'); ?>" rel="external" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
	      <a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
	    </div><!-- /header -->

		<div data-role="content">
			<?php 
				date_default_timezone_set('UTC');
				$weights = array();
				$days = array();
				//loops through all of the data from the controller
				foreach ($stats as $item) {
					//stores each object of the data into a new array
					array_push($weights, $item['pounds_lost']);
					array_push($days, $item['date']);
				}
			?>
			<div id="graph" class="chartWrapper">
			</div>
		</div><!-- /content -->

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->
	<!-- the scripts for the graph -->
	<script src="http://www.exratione.com/assets/raphael.1.5.2.min.js" type="text/javascript" charset="utf-8"></script> 
	<script src="http://www.exratione.com/assets/g.raphael.0.4.1.min.js" type="text/javascript" charset="utf-8"></script> 
	<script src="http://www.exratione.com/assets/g.line.0.4.2.altered.js" type="text/javascript" charset="utf-8"></script> 
	<script src="http://www.exratione.com/assets/date.format.1.2.3.min.js" type="text/javascript" charset="utf-8"></script>
	

	<script type="text/javascript">
		$(function () {
			//stores the data from php into new javascript arrays
			var weights = <?php echo json_encode($weights) ?>;
			var dates = <?php echo json_encode($days) ?>;
			//the variable for the graph
		  	var r = Raphael("graph");
		  	var xAxisValues = [];
			for( var i = 0; i < dates.length; i++ ) {
				//loops throught the dates array and sets each day to a date for display
			    var date = new Date(dates[i]);
			    xAxisValues.push(date);
			}
		  	var chart = r.g.linechart(
		    	10, 10,      // top left anchor
		    	200, 140,    // bottom right anchor
		    	xAxisValues,        // red line x-values
		    	weights, // red line y-values
		    	{
		       		nostroke: false,   // lines between points are drawn
		       		axis: "0 0 1 1",   // draw axes on the left and bottom
		       		symbol: "disc",    // use a filled circle as the point symbol
		       		smooth: true,      // curve the lines to smooth turns on the chart
		       		dash: "-",         // draw the lines dashed
		       		colors: [
		         		"#995555"      // the first line is red  
		       		]
				}
			);
			//to change the text of the x-axis to the dates for easy usage
			var axisItems = chart.axis[0].text.items;
		    for( var i = 0, l = axisItems.length; i < l; i++ ) {
		       var date = new Date(parseInt(axisItems[i].attr("text")));
		       axisItems[i].attr("text", dateFormat(date, "mm/dd"));
		    }
		});
	</script>
</body>
</html>