<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Array</h1>

		<?php


		$coworkers = array('junga','loves','me','oldschool');

		$i=0;

		array_push($coworkers,'hello');


		while ($i < count($coworkers)){
			echo $coworkers[$i]." ";
			$i+=1;
		}


		 ?>

	</body>
</html>
