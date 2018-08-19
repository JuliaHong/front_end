<?php

require_once('./lib/print.php');

 ?>

<?php
require('./view/top.php') ?>
	<a href="create.php">Create</a>



	<?php if(isset($_GET['id'])){?>

		<a href="update.php?id=<?=$_GET['id']?>">Update</a>
	<?php }  ?>

	<?php if(isset($_GET['id'])){?>

		<form  action="delete_process.php?id=<?=$_GET['id']?>" method="post">
			<input type="hidden" name="id" value="<?php print_title(); ?>">
			<input type="submit" value="delete">

		</form>

	<?php }  ?>




	<h1>
		<?php

		print_title();


		?>
	</h1>

	<?php
		print_description();

	?>
<?php

require('./view/bottom.php');

 ?>
