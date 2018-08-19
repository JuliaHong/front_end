<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<h1>User desinged function</h1>

		<?php
			function basic() {
				echo 'hi my name is jung A';
				echo "hi I'm 22 in korean age!";
			}

			basic();




		 ?>
		 <h2>parameter &amp; argument</h2>

		 <?php

		 function add($left, $right){
			 return $left+$right;
		 }

		 basic();
		 file_put_contents('result.txt',add(3,4));

		  ?>


	</body>
</html>
