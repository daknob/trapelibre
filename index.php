<?php
	/*
		Copyright 2016 Kostas Mpenos <mpenos.ks@gmail.com>
		Copyright 2016 Spyridon Rafail Panagiotopoulos <martkonsta@gmail.com>

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
						<h3 class="panel-title">Log-in</h3>
					</div>
					<div class="panel-body">
						Welcome to the <?php echo $ProjectName; ?> instance for <?php echo $RestaurantName; ?>.
						In order to continue to the system, please log-in.
						
						<form action="login.php" method="post">
							<div class="row">
								<div class="form-group col-xs-offset-1 col-xs-10 col-md-4">
									<label for="username">Username:</label>
									<input type="text" class="form-control" id="username" name="username"></input>
								</div>
								<div class="form-group col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-4">
									<label for="password">Password:</label>
									<input type="password" class="form-control" id="password" name="password"></input>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-offset-1 col-xs-10">
									<button type="submit" class="btn btn-primary col-xs-offset-1 col-xs-10">Log-in</button>
								</div>
							</div>
						</form>
					
					</div>
				</div>
			</div>
		</div>
		<?php
		require_once "footer.php";
		?>
	</body>

</html>
