<?php
unlink('data/'.$_POST['id']);
header('Location: ../cumm/index.php');
?>
