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
			<form action="/setup.php" method="post">
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
				<div class="row">
					<div class="panel panel-default col-xs-offset-1 col-xs-10">
						<div class="panel-heading">
							<h3 class="panel-title">Administrator Credentials</h3>
						</div>
						<div class="panel-body">
							<p><?php echo $ProjectName ?> currently has an Administrator
							which can configure the parameters of the software. Please
							enter the user credentials below.</p>
							<div class="row">
								<div class="form-group col-xs-offset-1 col-xs-10">
									<label for="username">Username:</label>
									<input type="text" class="form-control" id="username" name="username"></input>
								</div>
								<div class="form-group col-xs-offset-1 col-xs-10">
									<label for="password">Password:</label>
									<input type="password" class="form-control" id="password" name="password"></input>
								</div>
								<div class="form-group col-xs-offset-1 col-xs-10">
									<label for="password2">Repeat Password:</label>
									<input type="password2" class="form-control" id="password2" name="password2"></input>
								</div>

							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<?php
		require_once "footer.php";
		?>
	</body>

</html>
