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

		<form action="process_create.php" method="post">
			<p><input type="text" name="title" palceholder="title"></p>
			<p><textarea name="description" rows="8" cols="40"
				placeholder="description"></textarea></p>
				<p><input type="submit"></p>
		</form>
	</body>
</html>
