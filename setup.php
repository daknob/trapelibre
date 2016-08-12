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
			<?php if ($_SERVER['REQUEST_METHOD'] != 'POST'){ ?>
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
								<p>Make sure the credentials you use are secure and cannot
								be guessed by employees and/or customers who may obtain
								access to the service.</p>
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
										<input type="password" class="form-control" id="password2" name="password2"></input>
									</div>
								</div>
									<button type="submit" class="btn btn-info col-xs-offset-1 center-block">Submit</button>
							</div>
						</div>
					</div>
				</form>
			<?php }else{
				class MyDB extends SQLite3{
					function __construct(){
					    $this->open($GLOBALS['DBname']);
					}
				}
				$db = new MyDB();
				if(!$db){
					echo $db->lastErrorMsg();
				} else {
					$sql ="
      				CREATE TABLE USERS
				      (ID INTEGER PRIMARY KEY  AUTOINCREMENT   NOT NULL,
				      username           TEXT    NOT NULL,
				      password            TEXT     NOT NULL,
				      priv         INT NOT NULL);";
				}
				$ret = $db->exec($sql);
				if(!$ret){
				    echo $db->lastErrorMsg();
				} else {
				    $sql = "
				    CREATE TABLE PRODUCTS
				    (ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
				    name TEXT NOT NULL,
				    price REAL NOT NULL)";
				    $ret = $db->exec($sql);
				   	if(!$ret){
				      	echo $db->lastErrorMsg();
				   	}
				   	$sql = "INSERT INTO users(username,password,priv) VALUES ('".$_POST['username']."','".$_POST['password']."',5);";
				   	$ret = $db->exec($sql);
				   	if(!$ret){
				      	echo $db->lastErrorMsg();
				   	}
				   	$db->close();	   
				}
			}
		?>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-body text-justify">
						<p class="text-center">Database created successfully</p>
					</div>
				</div>
			</div>
		</div>
		<?php
		require_once "footer.php";
		?>
	</body>

</html>