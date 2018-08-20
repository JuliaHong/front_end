

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

<?php
require('db.php');
require('auth.php');




if(isset($_POST['name'])){

$name=stripslashes($_REQUEST['name']);
$name = mysqli_real_escape_string($con,$name);
$available= stripslashes($_REQUEST['available']);
$available=mysqli_real_escape_string($con,$available);
$seller = stripslashes($_REQUEST['seller']);
$seller = mysqli_real_escape_string($con,$seller);
$price = stripslashes($_REQUEST['price']);
$price= mysqli_real_escape_string($con,$price);

$query = "INSERT into `products` (name,available,seller,price)
VALUES ('$name',$available,'$seller',$price)";
$result = mysqli_query($con,$query);

if($result){

	echo "<h1>{$name} Succeed</h1>";
}


}else{
}
 ?>

		<div class="form">
			<form  action="" method="post">
				<input type="text" name="name" placeholder="name of product" required>
				<input type="number" name="available" placeholder="number of product" required>
				<input type="hidden" name="seller" value='<?=$_SESSION['username']?>'>
				<input type="number" name="price" placeholder="price" required>
				<input type="submit" name="submit" value="Upload Producgt">
			</form>

		</div>

		<a href="dashboard.php">Back to dashboard</a>

	</body>
</html>
