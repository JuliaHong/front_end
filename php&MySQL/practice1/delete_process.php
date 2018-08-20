<?php

unlink('./data/'.$_POST['id']);
header('Location: /parameter.php');

 ?>
