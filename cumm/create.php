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

    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <a href="create.php">글쓰기!</a>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
      </div>
      <?php
      require_once('../view/bottom.php') ?>
