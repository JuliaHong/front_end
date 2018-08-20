<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Dashboard</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		require('db.php');
		require('auth.php');
		 ?>
		<p>This is another secured page for <?=$_SESSION['username']?></p>
		<p><a href="index.php">Go Back</a></p>
		<a href="logout.php">LOG OUT</a><br><br>
		<a href="sell.php">Sell product</a><br>
		<a href="buy.php">Buy product! :)</a>

	</body>
</html>
