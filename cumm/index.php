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
            <a href="create.php">글쓰기</a>
            <?php if(isset($_GET['id'])) { ?>
              <a href="update.php?id=<?=$_GET['id']?>">수정</a>
              <form action="delete_process.php" method="post">
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="submit" value="delete">
              </form>
            <?php } ?>
            <h2>
              <?php
              print_title();
              ?>
            </h2>
            <?php
            print_description();
             ?>
          </div>

          </html>
<?php
require_once('../view/bottom.php') ?>
