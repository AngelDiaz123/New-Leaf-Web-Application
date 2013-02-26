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
	<div data-role="page" data-theme="a" id="home">
		<div data-role="header">
			<h1 id="header">Home</h1>
			<a class="home" href="#home" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div class="list">
				<!-- the list of the menu items that you will find -->
				<ul data-role="listview">
					<li>Welcome Back <?php echo $this->session->userdata('user_name'); ?>!</li>
					<li><a href="#track" data-transition="slidefade" data-prefetch>Track weight</a></li>
					<li><a href="#see" data-transition="slidefade" data-prefetch>See graph</a></li>
					<li><a href="<?php echo base_url('index.php/search'); ?>" rel="external" data-transition="slidefade" data-prefetch>Search for recipe</a></li>
					<li><a href="#edit" data-transition="slidefade" data-prefetch>Edit account</a></li>
					<li><a href="#about" data-transition="slidefade" data-prefetch>About us</a></li>
					<li><a href="#terms" data-transition="slidefade" data-prefetch>Terms of service</a></li>
				</ul>
			</div>
	  		<!--<h2>Welcome Back, <?php// echo $this->session->userdata('user_name'); ?>!</h2>-->
		</div><!-- /content -->

		<div data-role="footer">-
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->

	<div data-role="page" data-theme="a" id="track">
		<div data-role="header">
			<h1 id="header">Track weight</h1>
			<a class="logout" href="#home" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div class="trackCounter">
				<!-- input data to the database to for weight tracking. not fully working yet -->
				<div data-role="fieldcontain">
					<label for="quantity">Amount of weight lost</label>
					<input id="quantity" type="number"/>
					<label for="date">Day of the month</label>
					<input id="date" type="number" min="1" max="31" step='1'/>
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
			<a class="logout" href="#home" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<div id="graph">
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
			<a class="logout" href="#home" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
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
			<a class="logout" href="#home" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
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
						<br/>
						<p> What will I see when I first login?</p>
						<p>After registering the main site menu will be displayed after logging in. The menu shows all of options avialable with this app. The top menu allows for you to go back to the home page or allows for you to logout.</p>
						<br/>
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

	<div data-role="page" data-theme="a" id="terms">
		<div data-role="header">
			<h1 id="header">About</h1>
			<a class="logout" href="#home" data-icon="home" class="ui-btn-left" data-transition="slidefade">Home</a>
			<a class="logout" href="<?php echo base_url('index.php/user/logout')?>" data-icon="delete" class="ui-btn-right" data-transition="slidefade">Logout</a>
		</div><!-- /header -->

		<div data-role="content">
			<!-- terms of use -->
			<div id="terms">
				<h2>
					Web Site Terms and Conditions of Use
				</h2>

				<h3>
					1. Terms
				</h3>

				<p>
					By accessing this web site, you are agreeing to be bound by these 
					web site Terms and Conditions of Use, all applicable laws and regulations, 
					and agree that you are responsible for compliance with any applicable local 
					laws. If you do not agree with any of these terms, you are prohibited from 
					using or accessing this site. The materials contained in this web site are 
					protected by applicable copyright and trade mark law.
				</p>

				<h3>
					2. Use License
				</h3>

				<ol type="a">
					<li>
						Permission is granted to temporarily download one copy of the materials 
						(information or software) on New Leaf's web site for personal, 
						non-commercial transitory viewing only. This is the grant of a license, 
						not a transfer of title, and under this license you may not:
						
						<ol type="i">
							<li>modify or copy the materials;</li>
							<li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
							<li>attempt to decompile or reverse engineer any software contained on New Leaf's web site;</li>
							<li>remove any copyright or other proprietary notations from the materials; or</li>
							<li>transfer the materials to another person or "mirror" the materials on any other server.</li>
						</ol>
					</li>
					<li>
						This license shall automatically terminate if you violate any of these restrictions and may be terminated by New Leaf at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
					</li>
				</ol>

				<h3>
					3. Disclaimer
				</h3>

				<ol type="a">
					<li>
						The materials on New Leaf's web site are provided "as is". New Leaf makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, New Leaf does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
					</li>
				</ol>

				<h3>
					4. Limitations
				</h3>

				<p>
					In no event shall New Leaf or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on New Leaf's Internet site, even if New Leaf or a New Leaf authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
				</p>
							
				<h3>
					5. Revisions and Errata
				</h3>

				<p>
					The materials appearing on New Leaf's web site could include technical, typographical, or photographic errors. New Leaf does not warrant that any of the materials on its web site are accurate, complete, or current. New Leaf may make changes to the materials contained on its web site at any time without notice. New Leaf does not, however, make any commitment to update the materials.
				</p>

				<h3>
					6. Links
				</h3>

				<p>
					New Leaf has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by New Leaf of the site. Use of any such linked web site is at the user's own risk.
				</p>

				<h3>
					7. Site Terms of Use Modifications
				</h3>

				<p>
					New Leaf may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.
				</p>

				<h3>
					8. Governing Law
				</h3>

				<p>
					Any claim relating to New Leaf's web site shall be governed by the laws of the State of Florida without regard to its conflict of law provisions.
				</p>

				<p>
					General Terms and Conditions applicable to Use of a Web Site.
				</p>



				<h2>
					Privacy Policy
				</h2>

				<p>
					Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.
				</p>

				<ul>
					<li>
						Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
					</li>
					<li>
						We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.		
					</li>
					<li>
						We will only retain personal information as long as necessary for the fulfillment of those purposes. 
					</li>
					<li>
						We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. 
					</li>
					<li>
						Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. 
					</li>
					<li>
						We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
					</li>
					<li>
						We will make readily available to customers information about our policies and practices relating to the management of personal information. 
					</li>
				</ul>

				<p>
					We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. 
				</p>
			</div>			
		</div><!-- /content -->

		<div data-role="footer">
			<div class="copyFooter">
				<span class="copyInfo">&copy; 2013 New Leaf</span><span class="myCopy">Property of Angel Diaz</span>
			</div>
		</div><!-- /footer -->
	</div><!-- /page -->

	<script type="text/javascript">
	$(function () {
	    var chart;
	    $(document).ready(function() {
	        chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'graph',
	                type: 'line',
	                marginRight: 130,
	                marginBottom: 25
	            },
	            title: {
	                text: 'Weight Lost',
	                x: -20 //center
	            },
	            xAxis: {
	                categories: ['Day']
	            },
	            yAxis: {
	                title: {
	                    text: 'Pounds'
	                },
	                plotLines: [{
	                    value: 0,
	                    width: 1,
	                    color: '#808080'
	                }]
	            },
	            tooltip: {
	                formatter: function() {
	                        return '<b>'+ this.series.name +'</b><br/>'+
	                        this.x +': '+ this.y +'°C';
	                }
	            },
	            legend: {
	                layout: 'vertical',
	                align: 'right',
	                verticalAlign: 'top',
	                x: -10,
	                y: 100,
	                borderWidth: 0
	            },
	            series: [{
	                name: 'YOU',
	                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
	            }]
	        });
	    });
	});

	</script>
</body>
</html>