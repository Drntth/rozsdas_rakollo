<?php
  require("includes/loader.inc.php");
  include("includes/session.inc.php");
  if(isset($_POST["ok"])){
    $igen = "Igen";
    $enged = new Controller;
    $enged->EngedC($_POST["id"],$igen);
    header('location:jovahagyasok_szerk.php');
  }
  if(isset($_POST["no"])){
    $enged = new Controller;
    $enged->NemEngedC($_POST["id"]);
    header('location:jovahagyasok_szerk.php');
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
      include("includes/menuSzerkVissz.inc.php");
    ?>
    <div class="container-fluid">
      <div class="row content">
        <div class="col-12 jovahagyasok">
          <?php
            $reqposztok = new View;
            $reqposztok->ReqPosztok();
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </body>
</html>