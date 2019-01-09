<?php include_once "konfiguracija.php" ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php" ?>
  </head>
  <body>

  
    <div class="grid-container">
      <div class="grid-x" id="header">
        <div class="large-9 cell" id="index-naslov">
          <h1><?php echo $naslov ?></h1>
        </div>        
      </div>

      <div class="login-naslov" >
          <h2>First Log in, then browse</h2>
      </div>  
      <div id="login-button" class="large-3 cell">
          <a class="button expanded" href="login.php">Log in</a>
        </div>
      
    </div>

    <footer>
      <?php include_once "footer.php" ?>
    </footer>
    

    <?php include_once "skripte.php" ?>
  </body>
</html>
