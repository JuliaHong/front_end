<?php

require_once('./lib/print.php');
require('./view/top.php');

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<title><?php print_title(); ?></title>
</head>
<body>
	<h1><a href="parameter.php">WEB</a></h1>
	<ol>
		<?php

		print_list();
		?>
	</ol>
	<a href="create.php">Create</a>



	<?php if(isset($_GET['id'])){?>

		<a href="update.php?id=<?=$_GET['id']?>">Update</a>

	<?php }  ?>


	<form action="update_process.php" method="post">
	<input type="hidden" name="old_name" value="<?php print_title(); ?>">
	<p>	<input type="text" name="title" placeholder="title" value=<?php print_title();?>></p>
	<p>	<textarea  name="description"><?php print_description();?></textarea></p>
	<p><input type="submit"></p>
	</form>


	<?php

	require('./view/bottom.php');

	 ?>
