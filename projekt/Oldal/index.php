<?php
  require("includes/loader.inc.php");
?>
<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Rozsdás Rákolló</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.png">
  </head>

  <body>
    <?php
      include("includes/menu.inc.php");
    ?>
    <div class="container-fluid">
      <div class="row content">
        <div class="col-3 sidenav">
          <?php
            $mufajok = new View;
            $mufajok->Mufajok();
          ?>
        </div>
        <div class="col-8 main">
          <?php
            $posztok = new View;
            $posztok->Posztok();
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </body>
</html>