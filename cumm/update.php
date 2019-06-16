<?php
require_once('../lib/print.php')
 ?>
<!DOCTYPE html>
<html>
<style>
a {
  text-decoration: none;
}
</style>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
     <link rel="stylesheet" href="../cssjs/style.css">
  </head>
  <body>
    <?php
    require_once('../view/top.php') ?>

     <div id="jb-container">

    <h1><a href="index.php">게시판</a></h1>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <a href="create.php">뒤로가기</a>
    <?php if(isset($_GET['id'])) { ?>
      <a href="update.php?id=<?=$_GET['id']?>"></a>
    <?php } ?>
    <h2>
     <form action="update_process.php" method="post">
       <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
       <p>
         <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
       </p>
       <p>
         <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
       </p>
       <p>
         <input type="submit">
       </p>
     </form>
   </div>
     <?php
     require_once('../view/bottom.php') ?>
