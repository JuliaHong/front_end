<?php
$conn=mysqli_connect('localhost','root','rr115500','opentutorials');
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
		<h1><a href="index.php">WEB</a></h1>
		<ol>
			<?=$list?>
		</ol>
		<?php

		$article=array(
			'title'=>'Welcome',
			'description'=>'Hello, web'
		);

		$update_link='';
		$delete_link='';

		if(isset($_GET['id'])){
			$filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
			$sql="SELECT * FROM topic WHERE id={$filtered_id}";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result);
			$article['title']=$row['title'];
			$article['description']=$row['description'];

			$update_link='<a href="update.php?id='.$_GET['id'].'">Update</a>';
			$delete_link='<a href="process_delete.php?id='.$_GET['id'].'">Delete</a>';
		}




		 ?>

		<a href="create.php">Create</a>
		<?=$update_link ?>
		<?=$delete_link ?>


		 	<h2><?=$article['title']?></h2>
			<p><?=$article['description']?></p>
	</body>
</html>
