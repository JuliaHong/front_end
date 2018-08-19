<?php

rename('./data/'.$_GET['id'],'./data/'.$_POST['title']);
file_put_contents('./data/'.$_POST['title'],$_POST['description']);
header('Location: /parameter.php?id='.$_POST['title']);

 ?>
