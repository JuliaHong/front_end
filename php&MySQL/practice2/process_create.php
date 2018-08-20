<?php

$conn=mysqli_connect('localhost','root','rr115500','opentutorials');
$sql="

INSERT INTO topic (title,description,created)
VALUES('{$_POST[title]}','{$_POST[description]}',NOW()
)

";

$result=mysqli_query($conn,$sql);
if(result===false){
	echo 'error';
}else{
	echo 'succeed <a href="index.php">돌아가기</a>';
}







?>
