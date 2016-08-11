<?php
	/*
		Copyright 2016 Antonios A. Chariton <daknob.mac@gmail.com>

		Licensed under the Apache License, Version 2.0 (the "License");
		you may not use this file except in compliance with the License.
		You may obtain a copy of the License at

		http://www.apache.org/licenses/LICENSE-2.0

		Unless required by applicable law or agreed to in writing, software
		distributed under the License is distributed on an "AS IS" BASIS,
		WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
		See the License for the specific language governing permissions and
		limitations under the License.
	*/
	
	require_once("config.php");
?>

<html>
	<head>
	<link href="static/css/navbar.css" rel="stylesheet">
	<link href="static/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
			require_once "navbar.php";
		?>
		<div class="container">
			<div class="row">
				<div class="panel panel-default col-xs-offset-1 col-xs-10">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $ProjectName; ?> Set Up</h3>
					</div>
					<div class="panel-body">
						<p>Welcome to the <?php echo $ProjectName; ?> Set Up Page.
						In this page you need to take some basic steps before you
						are able to use the software. Most settings can be
						configured from the configuration file named <code>config.php</code>
						so make sure you also check it out beforehand.</p>
						<p>The recommended way of doing this is to edit the file first,
						then use this page, and finally use the software in a real
						environment.</p>
					</div>
				</div>
			</div>
		</div>
		<?php
		require_once "footer.php";
		?>
	</body>

</html>
