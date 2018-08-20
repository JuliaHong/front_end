<?php

$conn=mysqli_connect('localhost','root','rr115500','opentutorials');
$sql="

UPDATE topic SET title='{$_POST['title']}', description='{$_POST['description']}' WHERE
id={$_POST['id']}

";

$result=mysqli_query($conn,$sql);
if(result===false){
	echo 'error';
}else{
	echo 'succeed <a href="index.php">돌아가기</a>';
}







?>
