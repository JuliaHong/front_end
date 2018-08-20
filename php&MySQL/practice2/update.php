<?php
require('insert.php');
$sql="SELECT * FROM topic";
$result=mysqli_query($conn,$sql);
$list='';

while($row=mysqli_fetch_array($result)){
	$list=$list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>WEB</title>
	</head>
	<body>
		<h1><a href="index.html">WEB</a></h1>
		<ol>
			<?=$list?>
		</ol>

		<?php

		$sql="SELECT * FROM topic WHERE id={$_GET['id']}";
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);


		 ?>

		<form action="process_update.php" method="post">
			<input type="hidden" name="id"value="<?=$_GET['id']?>">
			<p><input type="text" name="title" palceholder="title" value="<?=$row['title']?>" ></p>
			<p><textarea name="description" rows="8" cols="40"
				><?=$row['description']?></textarea></p>
				<p><input type="submit"></p>
		</form>
	</body>
</html>
