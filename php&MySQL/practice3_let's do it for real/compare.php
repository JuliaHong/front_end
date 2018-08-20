<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	equire('db.php');
	session_start();
	// If form submitted, insert values into the database.
	if (isset($_POST['username'])){
	        // removes backslashes
		$username = stripslashes($_REQUEST['username']);
	        //escapes special characters in a string
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());

		$rows = mysqli_num_rows($result);
	        if($rows==1){
		    $_SESSION['username'] = $username;
	            // Redirect user to index.php
		    header("Location: index.php");
	         }else{
		echo "hi";
		}
	}else{

		?>


		<h1> LOG IN</h1>
		<form  action="" method="post" name="login">
			<input type="text" name="username" placeholder="username" required>
			<input type="password" name="password" placeholer="password" required>
			<input type="submit" name="submit" value="LOG IN">
		</form>
		<p>Not registered yet ? <a href="registration.php">Register Now!</a></p>
		<?php } ?>
	</body>

</html>
