<?php


$conn=mysqli_connect('localhost','root','rr115500','opentutorials');


$sql="SELECT * FROM topic";

$result=mysqli_query($conn,$sql);
var_dump($result->num_rows);

 ?>
