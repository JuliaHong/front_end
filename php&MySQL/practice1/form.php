<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php


		file_put_contents('data/'.$_POST['title'],$_POST['description']);

		echo "<p>Title : ".$_POST['title']."</p><br><br>";
		echo "<p>Description : ".$_POST['description']."</p>";

		 ?>
	</body>
</html>
