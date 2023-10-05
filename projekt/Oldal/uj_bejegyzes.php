<?php
  require("includes/loader.inc.php");
  include("includes/session.inc.php");

  if(isset($_POST["feltolt"])){
        $reg = new Controller;
        $reg->Uj_BejegyzesC($_POST["cim"],$_POST["szoveg"],$_POST["mufaj"],$_SESSION["id"]);
    
}
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
      include("includes/menuFelhVissz.inc.php");
    ?>
    <div class="container-fluid">
      <div class="row content">
        <div class="col-12 uj_bejegyzes">
          <?php
            $uj_bejegyzes = new View;
            $uj_bejegyzes->Uj_Bejegyzes();
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </body>
</html>