<?php
    require("includes/loader.inc.php");
    include("includes/session.inc.php");

    if(isset($_POST["modositas"])){
      $jog = new Controller;
      $jog->JogC($_POST["id"],$_POST["jog"]);
      header('location:jogosultsagok.php');
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
    include("includes/menuVissz.inc.php");
  ?>
  <div class="container-fluid">
    <div class="row content">
      <div class="col-12 jogosultsagok">
        <?php
            $felhasznalok = new View;
            $felhasznalok->Felhasznalok();
        ?>
      </div>
    </div>
  </div>
<script type="text/javascript" src="assets/bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>