<?php
include_once "konfiguracija.php";

if(!isset($_SESSION["user"])){
    header("location: login.php?g=4");
    exit;
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php" ?>
  </head>
  <body>

    <div class="grid-container">
      <div class="grid-x">
        <div class="large-9 cell">
          <h1><?php echo $naslov ?></h1>
        </div>
        <div id="logut-button" class="large-3 cell">
          <a class="button expanded" href="logout.php">Logout</a>
        </div>
      </div>
   </div>

   <footer>
      <?php include_once "footer.php" ?>
    </footer>
    

    <?php include_once "skripte.php" ?>
  </body>
</html>

