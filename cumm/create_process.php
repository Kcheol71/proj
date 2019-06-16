<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: ../cumm/index.php?id='.$_POST['title']);
?>
