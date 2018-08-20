


<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Welcome guys</title>
		<link rel="stylesheet" href="sytle.css">
	</head>
	<body>
		<?php

			require('auth.php');

		 ?>
		<p>Welcome <?= $_SESSION['username'];?></p>
		<p>this is secure area</p>
		<p><a href ="dashboard.php">Dashboard</a></p>
		<a href="logout.php">LOGOUT</a>



	</body>
</html>
