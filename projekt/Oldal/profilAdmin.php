<?php
  require("includes/loader.inc.php");
  include("includes/session.inc.php");
  if(isset($_POST["szerk"])){
    if($_POST["pass"] <> $_POST["pass_re"]){
      echo '<script>alert("A jelszó nem egyezik")</script>'; 
    }
    else{
      $modprof = new Controller;
      $modprof->modprofC($_POST["id"],$_POST["username"],$_POST["pass"]);
      header('location:admin.php');
    }

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
        <div class="col-12 profil">
          <?php
            $profil = new View;
            $profil->Profil();
          ?>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </body>
</html>