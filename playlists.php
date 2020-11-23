<?php
 require 'dbconfig/config.php';
?><!DOCTYPE html>
<html>
<head>
	<title>
		PLAYLISTS
	</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/playlists.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="sidebar">
		<h1>Playlists</h1>
		<nav>
			<a href="home.php" class="nav-item">Home</a>
			<a href="profile.php" class="nav-item">Profile</a>
			
		</nav>
	</div>

	<div class="main-content">
		<div class="picture-tiles">
			<div class="picture one" onclick="window.open('mb.php')">
				<div class="content-title">
					<h4 class="display-4">Mood Booster</h4>
				</div>
			</div>


			<div class="picture two" onclick="window.open('r.php')">
				<div class="content-title">
					<h4 class="display-4">Relaxer</h4>
				</div>
			</div>
			<div class="picture three" onclick="window.open('ht.php')">
				<div class="content-title">
					<h4 class="display-4">Happy Tunes</h4>
				</div>
			</div>
			<div class="picture four" onclick="window.open('c.php')">
				<div class="content-title">
					<h4 class="display-4">Calming</h4>
				</div>
			</div>
			<div class="picture five" onclick="window.open('SW.php')">
				<div class="content-title">
					<h4 class="display-4">Sleep Well</h4>
				</div>
			</div>
			
		</div>
	</div>

</body>
</html>