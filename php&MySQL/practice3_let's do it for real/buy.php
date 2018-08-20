<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


	<h1>Welcome to market :D</h1>


	<?php
	require('db.php');
	require('auth.php');




		$list='';
		$query="SELECT * FROM `products`";
		$result = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($result)){
			$list = $list."<li> name : {$row['name']} available : {$row['available']}</li>";
		}


	?>


	<ol>
	<?= $list?>
	</ol>
</body>
</html>
